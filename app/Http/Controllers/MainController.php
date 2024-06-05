<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Agent;
use App\Models\Cities;
use App\Models\Properties;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Str;


class MainController extends Controller
{
    public function index()
    {
        $prop = Properties::where('activate', 0)->inRandomOrder()->get();
        $featureProp = Properties::where('activate', 0)->inRandomOrder()->get();
        $city = Cities::all();
        $user = users::count();
        $agency = Agency::count();
        $propertyCounts = Properties::select('City', DB::raw('count(*) as total'))
            ->where('activate', 0)
            ->groupBy('City')
            ->pluck('total', 'City');

        $propCount = $prop->count();

        return view('main.index', compact('prop', 'propCount', 'featureProp', 'city', 'propertyCounts', 'user', 'agency'));
    }

    public function PropertyDetail($id)
    {
        $prop = properties::find($id);
        $similarProperties = Properties::where('City', $prop->City)
            ->where('activate', 0)
            ->where('prize', '>=', $prop->prize - 10000)
            ->where('prize', '<=', $prop->prize + 10000)
            ->where('id', '!=', $id)
            ->inRandomOrder()
            ->limit(8)
            ->get();
        return view('main.PropertyDetail', compact('prop', 'similarProperties'));
    }

    public function PropertyList()
    {
        $prop = Properties::where('activate', 0)->orderBy('id', 'desc')->get();
        $HeadName = 'Properties';
        return view('main.Properties', compact('prop', 'HeadName'));
    }

    public function sortProperties(Request $request)
    {
        $order = $request->input('order');
        $properties = Properties::where('activate', 0);
        if ($order == 1) {
            $properties = $properties->orderBy('Name', 'asc');
        } elseif ($order == 2) {
            $properties = $properties->orderBy('Name', 'desc');
        }

        $prop = $properties->get();

        return view('main.partials.gridProperties', compact('prop'))->render();
    }

    public function CityWiseList($id)
    {
        $Head =  Cities::find($id)->Name;
        $HeadName = $Head . ' Properties';
        $prop = Properties::where([['activate', 0], ['City', $id]])->get();
        return view('main.Properties', compact('prop', 'HeadName'));
    }


    public function searchProperties(Request $request)
    {
        $query = Properties::query();
        $HeadName =  'Search Results';
        if ($request->has('city')) {
            $query->where('City', $request->input('city'));
        }

        if ($request->has('type')) {
            $query->where('Type', $request->input('type'));
        }

        if ($request->has('price')) {
            $price = $request->input('price');
            $query->where(function ($q) use ($price) {
                $q->where('Prize', '<=', $price)
                    ->orWhere('Prize', '>=', $price);
            });
        }

        if ($request->has('property-size')) {
            $propertySize = $request->input('property-size');
            $query->where(function ($q) use ($propertySize) {
                $q->where('Area', '>=', $propertySize)
                    ->orWhere('Area', '<=', $propertySize);
            });
        }

        if ($request->has('room')) {
            $query->where('Room', '>=', $request->input('room'));
        }

        if ($request->has('property')) {
            $query->where('Bath', '>=', $request->input('property'));
        }

        $prop = $query->get();

        return view('main.Properties', compact('prop', 'HeadName'));
    }

    public function ContactUs()
    {
        return view('main.Contact');
    }

    public function AboutUs()
    {
        $prop = Properties::where('activate', 0)->count();
        return view('main.About', compact('prop'));
    }

    public function Register()
    {
        return view('main.Register');
    }

    public function RegisterUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mail' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'string',
                'min:8', // minimum length 8 characters
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
        ], [
            'name.required' => 'Name is required.',
            'mail.required' => 'Email is required.',
            'mail.email' => 'Please provide a valid email address.',
            'mail.unique' => 'Email is already taken.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 characters long.',
            'password.regex' => 'Password must contain at least one uppercase letter, one digit, and one special character.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('error', 'Validation failed. Please check your inputs.');
        }

        $uid = Str::uuid()->toString();
        $us = new users();
        $us->name = $request->name;
        $us->email = $request->mail;
        $us->password = Hash::make($request->password);
        $us->two_factor_secret = $uid;
        $us->Status     = "0";
        $us->Role = "0";
        $us->save();
        $name = $request->name;
        $mail = $request->mail;
        $this->sendMail($uid, $name, $mail);
        return back()->with('success', 'Verification Mail Sent at your E-Mail Address');
    }


    public function activateAccount($code)
    {
        $us = users::where('two_factor_secret', $code)->first();
        if ($us && $us->email_verified_at == null) {
            $us->email_verified_at = now();
            $us->save();
            session()->put('LoginId', $us->id);
            session()->put('LoginName', $us->name);
            session()->put('LoginRole', $us->Role);
            session()->put('LoginAgency', $us->AgencyID);
            return redirect('/')->with('success', 'Account Verified Successfully');
        } elseif ($us) {
            return view('main.error.error')->with('error', 'Account Already Verified');
        } else {
            return view('main.error.error');
        }
    }


    public function Login()
    {
        return view('main.Login');
    }

    public function LoginUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mail' => 'required|email',
            'password' => [
                'required',
                'string',
                'min:8', // minimum length 8 characters
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
        ], [
            'mail.required' => 'Email is required.',
            'mail.email' => 'Please provide a valid email address.',
            'password.required' => 'Password is required.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('error', 'Incorrect Credentials.');
        }

        // Attempt to authenticate the user
        $user = users::where('email', $request->mail)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                if ($user->email_verified_at != null) {
                    if ($user->Status == "0") {
                        session()->put('LoginId', $user->id);
                        session()->put('LoginName', $user->name);
                        session()->put('LoginRole', $user->Role);
                        session()->put('LoginAgency', $user->AgencyID);
                        if ($user->Role == "2") {
                            return redirect('AdminHome');
                        } else {
                            return redirect('/');
                        }
                    } else {
                        return back()->with('error', 'Your Account is blocked by the admin contact Support.');
                    }
                } else {
                    return back()->with('error', 'Please Verify Your Email.');
                }
            } else {
                // Authentication failed
                return back()->with('error', 'Incorrect Credentials.');
            }
        } else {
            // Authentication failed
            return back()->with('error', 'Incorrect Credentials.');
        }
    }

    public function Logout()
    {
        session()->flush();
        return redirect('/')->With('success', 'Logout Successfully');
    }


    public function Agencies()
    {
        $agency = Agency::orderBy('Name', 'desc')->get();
        $AgentCounts = Agent::select('Agency', DB::raw('count(*) as total'))
            ->groupBy('Agency')
            ->pluck('total', 'Agency');
        $PropertyCounts = Properties::select('userId', DB::raw('count(*) as total'))
            ->where('listed_by', 2)
            ->groupBy('userId')
            ->pluck('total', 'userId');

        return view('main.agency', compact('agency', 'AgentCounts', 'PropertyCounts'));
    }

    public function AgencyDetail($id)
    {
        $agency = Agency::find($id);
        $AgentCounts = Agent::select('Agency', DB::raw('count(*) as total'))
            ->groupBy('Agency')
            ->pluck('total', 'Agency');
        $PropertyCounts = Properties::select('userId', DB::raw('count(*) as total'))
            ->where('listed_by', 2)
            ->groupBy('userId')
            ->pluck('total', 'userId');
        $prop = Properties::where([['listed_by', 2], ['userId', $id]])->get();
        $Agents = Agent::where('Agency', $id)->get();
        return view('main.agencyDetail', compact('agency', 'AgentCounts', 'PropertyCounts', 'prop', 'Agents'));
    }

    public function Agent()
    {
        $ag = Agent::orderBy('Name', 'desc')->get();
        return view('main.agent', compact('ag'));
    }

    public function AgentDetail($id)
    {
        $agent = Agent::find($id);
        $userCounts = users::where('Status', '0')->count();
        $PropertyCounts = Properties::where([['listed_by', 2], ['userId', $agent->Agency]])->count();
        $agency = Agency::find($agent->Agency);
        $agencyName = $agency->title;

        return view('main.agentDetail', compact('agent', 'PropertyCounts', 'userCounts', 'agencyName'));
    }

    public function AddProperty()
    {
        $ct = Cities::all();
        return view('main.addProperty', compact('ct'));
    }

    public function CreateAgency()
    {
        return view('main.CreateAgency');
    }

    public function CreateAgent()
    {
        return view('main.CreateAgent');
    }

    public function RegisterAgency(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'address' => 'required',
            'img' => 'required|file',
            'phNo' => 'required',
        ], [
            'title.required' => 'Title is required.',
            'address.required' => 'Address is required.',
            'img.required' => 'Image is required.',
            'phNo.required' => 'Phone No. is required.',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('error', 'Enter correct data in input field.');
        }

        $ag = new Agency();
        $ag->title = $request->title;
        $ag->name = $request->address;
        $ag->desc = $request->desc;
        $ag->userId = '1';
        $main = $request->img;
        try {
            $MainImageName = 'Agency' . time() . '.' . $main->getClientoriginalExtension();
            $request->img->move('Agency', $MainImageName);
            $ag->img = $MainImageName;
        } catch (Exception) {
            return back()->withErrors($validator)->withInput()->with('error', 'Error Uploading Image.');
        }

        $ag->phone = $request->phNo;
        $ag->save();

        $agencyId = Agency::orderBy('id', 'desc')->first();
        $LoginId = Session::get('LoginId');
        $user = users::find($LoginId);
        $user->AgencyID = $agencyId->id;
        $user->save();
        session()->put('LoginAgency', $agencyId->id);
        return redirect('Agencies')->with('success', 'Agency Created Successfully');
    }

    public function RegisterAgent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'Email' => 'required|email|unique:users,email',
            'desc' => 'required',
            'bio' => 'required',
            'img' => 'required|file',
            'phNo' => 'required',
        ], [
            'title.required' => 'Title is required.',
            'desc.required' => 'Overview is required.',
            'bio.required' => 'Address is required.',
            'img.required' => 'Biography is required.',
            'phNo.required' => 'Phone No. is required.',
            'Email.email' => 'Please provide a valid email address.',
            'Email.unique' => 'Email is already taken.',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('error', 'Enter correct data in input field.');
        }

        $ag = new Agent();
        $ag->name = $request->title;        // title  desc  address img phNo
        $ag->Email = $request->Email;        // title  desc  address img phNo
        $ag->bio = $request->bio;
        $ag->overview = $request->desc;
        $ag->Agency = Session::get('LoginAgency');
        $ag->phone = $request->phNo;
        $main = $request->img;
        try {
            $MainImageName = 'Agent' . time() . '.' . $main->getClientoriginalExtension();
            $request->img->move('Agent', $MainImageName);
            $ag->img = $MainImageName;
        } catch (Exception) {
            return back()->withErrors($validator)->withInput()->with('error', 'Error Uploading Image.');
        }
        $ag->save();

        $uid = Str::uuid()->toString();
        $us = new users();
        $us->name = $request->title;
        $us->email = $request->Email;
        $us->password = rand(1000, 9999);
        $us->two_factor_secret = $uid;
        $us->Status     = "0";
        $us->Role = "1";
        $us->save();
        
        $name = $request->title;
        $mail = $request->Email;
        $this->sendMail($uid, $name, $mail);
        return redirect('Agencies')->with('success', 'Agent Created Successfully');
    }

    public function EditAgency()
    {
        $id = Session::get('LoginAgency');
        $agency = Agency::find($id);
        return view('main.EditAgency', compact('agency'));
    }

    public function UpdateAgency(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'address' => 'required',
            'phNo' => 'required',
        ], [
            'title.required' => 'Title is required.',
            'address.required' => 'Address is required.',
            'phNo.required' => 'Phone No. is required.',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('error', 'Enter correct data in input field.');
        }
        $agId = Session::get('LoginAgency');
        $ag = Agency::find($agId);
        $ag->title = $request->title;
        $ag->name = $request->address;
        $ag->desc = $request->desc;
        $ag->userId = '1';
        if ($request->has('img')) {
            $main = $request->img;
            try {
                $MainImageName = 'Agency' . time() . '.' . $main->getClientoriginalExtension();
                $request->img->move('Agency', $MainImageName);
                $ag->img = $MainImageName;
            } catch (Exception) {
                return back()->withErrors($validator)->withInput()->with('error', 'Error Uploading Image.');
            }
        }

        $ag->phone = $request->phNo;
        $ag->save();
        return redirect('Agencies')->with('success', 'Agency Updated Successfully');
    }

    public function EditProfile()
    {
        $id = Session::get('LoginId');
        $user = users::find($id);
        return view('main.EditProfile', compact('user'));
    }

    public function UpdateUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mail' => 'required|email',
        ], [
            'name.required' => 'Name is required.',
            'mail.required' => 'Email is required.',
            'mail.email' => 'Please provide a valid email address.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('error', 'Validation failed. Please check your inputs.');
        }

        $id = Session::get('LoginId');
        $us = users::find($id);
        $us->name = $request->name;
        $us->email = $request->mail;
        if ($request->has('password')) {
            $us->password = Hash::make($request->password);
        }
        $us->save();
        Session::put('LoginName',$request->name);
        return redirect('/')->with('success', 'Profile Updated Successfully');
    }

public function MyProperties(){
    $id = Session::get('LoginId');
    $prop = Properties::where([['listed_by',1],['userId',$id]])->orderBy('id','desc')->get();
    return view('main.MyProperties',compact('prop'));
}

    protected function sendMail($uid, $Name, $recipent)
    {
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug = 0;  // Disable verbose debug output
            $mail->isSMTP();  // Send using SMTP
            $mail->Host = 'smtp.gmail.com';  // Set the SMTP server to send through
            $mail->SMTPAuth = true;  // Enable SMTP authentication
            $mail->Username = 'specificprojectmail@gmail.com';  // SMTP username
            $mail->Password = 'bmtf akpv vjxc vevb';  // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  // Enable implicit TLS encryption
            $mail->Port = 465;  // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            // Recipients
            $mail->setFrom('no-reply@BerryRealEstate.com', 'Berry Real Estate Account Verification');
            $mail->addAddress($recipent, $Name);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Activate Your Account';

            $activationLink = url('/activate/' . urlencode($uid));

            $mail->Body = '
            <!DOCTYPE html>
            <html>
            <head>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f6f6f6;
                        margin: 0;
                        padding: 0;
                    }
                    .container {
                        background-color: #ffffff;
                        padding: 20px;
                        border-radius: 10px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        max-width: 600px;
                        margin: 20px auto;
                    }
                    .header {
                        text-align: center;
                        padding-bottom: 20px;
                    }
                    .content {
                        font-size: 16px;
                        line-height: 1.6;
                        color: #333333;
                    }
                    .content h2 {
                        font-size: 24px;
                        color: #007BFF;
                        margin-bottom: 20px;
                    }
                    .button {
                        display: inline-block;
                        padding: 12px 25px;
                        margin-top: 20px;
                        font-size: 16px;
                        color: #ffffff !important;
                        background-color: #007BFF;
                        text-decoration: none;
                        border-radius: 5px;
                    }
                    .footer {
                        text-align: center;
                        font-size: 14px;
                        color: #888888 !important;
                        padding-top: 20px;
                    }
                    .footer a {
                        color: #007BFF;
                        text-decoration: none;
                    }
                </style>
            </head>
            <body>
                <div class="container">
                    <div class="header">
                        <h2>Activate Your Account</h2>
                    </div>
                    <div class="content">
                        <p>Hi ' . htmlspecialchars($Name) . ',</p>
                        <p>Welcome to Berry Real Estate! We are excited to have you on board. To get started, please activate your account by clicking the button below:</p>
                        <a href="' . $activationLink . '" class="button">Activate Account</a>
                        <p>If you did not sign up for this account, you can safely ignore this email.</p>
                        <p>Thank you,<br>Berry Real Estate Team</p>
                    </div>
                    <div class="footer">
                        <p>&copy; ' . date('Y') . ' Berry Real Estate. All rights reserved.</p>
                        <p><a href="http://127.0.0.1:8000/">Visit our website</a></p>
                    </div>
                </div>
            </body>
            </html>
            ';

            $mail->AltBody = 'Hi ' . $Name . ',

    Welcome to Berry Real Estate! We are excited to have you on board. To get started, please activate your account by clicking the link below:
    ' . $activationLink . '

    If you did not sign up for this account, you can safely ignore this email.

    Thank you,
    Berry Real Estate Team';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
