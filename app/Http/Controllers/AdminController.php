<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use App\Models\Properties;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        $pr = Properties::orderBy('id','desc')->get();
        $prop = $pr->count();
        $sale = $pr->where('Type','For Sale')->count();
        $buy = $pr->where('Type','For Buy')->count();
        $rent = $pr->where('Type','For Rent')->count();
        $co = $pr->where('Type','For Co-Living')->count();

        return view('admin.index',compact('prop','sale','rent','buy','co','pr'));
    }

    public function AddProperty()
    {
        $ct = Cities::all();
        return view('admin.AddProperty', compact('ct'));
    }

    public function RegisterProperty(Request $request)
    {
        $request->validate([
            'pro_name' => 'required|string',
            'desc' => 'required|string',
            'price' => 'required|numeric',
            'status' => 'required',
            'city' => 'required',
            'area' => 'required',
            'room' => 'required|integer',
            'bath' => 'required|integer',
            'near' => 'required|array',
            'near' => 'required',
            'address' => 'required',
            'img' => 'required',
            'img1' => 'required',
            'img2' => 'required',
            'img3' => 'required',
            'img4' => 'required',
        ]);

        $prop = new Properties();
        $prop->Name = $request->pro_name;
        $prop->Desc = $request->desc;
        $prop->Prize = $request->price;
        $prop->Type = $request->status;
        $prop->City = $request->city;
        $prop->Area = $request->area;
        $prop->Room = $request->room;
        $prop->Bath = $request->bath;
        $prop->NearBy =  json_encode($request->near);
        $prop->Location = $request->address;
        $prop->activate = 0;
        if (Session::has('LoginAgency')) {
            $prop->listed_by = 2;
            $prop->userId = Session::get('LoginAgency');
        } else {
            $prop->userId = Session::get('LoginId');
            $prop->listed_by = 1;
        }
        $checkedCheckboxes = $request->input('checkboxes', []);
        $prop->Features = json_encode($checkedCheckboxes);
        $main  = $request->img;
        $SubPic1 = $request->img1;
        $SubPic2 = $request->img2;
        $SubPic3 = $request->img3;
        $SubPic4 = $request->img4;

        $MainImageName = 'MainImage' . time() . '.' . $main->getClientoriginalExtension();
        $request->img->move('propertyPictures', $MainImageName);
        $prop->MainPic = $MainImageName;

        $Sub1ImageName = 'SubImage1' . time() . '.' . $SubPic1->getClientoriginalExtension();
        $request->img1->move('propertyPictures', $Sub1ImageName);
        $prop->SubPic1 = $Sub1ImageName;

        $Sub2ImageName = 'SubImage2' . time() . '.' . $SubPic2->getClientoriginalExtension();
        $request->img2->move('propertyPictures', $Sub2ImageName);
        $prop->SubPic2 = $Sub2ImageName;

        $Sub3ImageName = 'SubImage3' . time() . '.' . $SubPic3->getClientoriginalExtension();
        $request->img3->move('propertyPictures', $Sub3ImageName);
        $prop->SubPic3 = $Sub3ImageName;

        $Sub4ImageName = 'SubImage4' . time() . '.' . $SubPic4->getClientoriginalExtension();
        $request->img4->move('propertyPictures', $Sub4ImageName);
        $prop->SubPic4 = $Sub4ImageName;

        $prop->save();
        return back()->with('success', 'Property saved successfully!');
    }

    public function PropertyList()
    {
        $prop = Properties::orderBy('created_at', 'desc')->get();
        return view('admin.PropertyList', compact('prop'));
    }


    public function EditProperty($id)
    {
        $prop = Properties::find($id);
        return view('admin.EditProperty', compact('prop'));
    }

    public function DeleteProperty($id)
    {
        $prop = Properties::find($id);
        $prop->delete();
        return back();
    }

    public function ChangeStatusProperty($id)
    {
        $prop = Properties::find($id);
        $prop->activate = ($prop->activate == 0 ? 1 : 0);
        $prop->save();
        return back();
    }

    public function UpdateProperty($id, Request $request)
    {
        $prop = Properties::find($id);
        $prop->Name = $request->pro_name;
        $prop->Desc = $request->desc;
        $prop->Prize = $request->price;
        $prop->Type = $request->city;
        $prop->City = $request->status;
        $prop->Area = $request->area;
        $prop->Room = $request->room;
        $prop->Bath = $request->bath;
        $prop->NearBy =  json_encode($request->near);
        $prop->Location = $request->address;
        $prop->activate = 0;
        $prop->userId = 1;
        $prop->listed_by = 1;
        $prop->activate = 0;

        if ($request->has('checkboxes'))
            $prop->Features = json_encode($request->input('checkboxes', []));



        $main  = $request->img;
        $SubPic1 = $request->img1;
        $SubPic2 = $request->img2;
        $SubPic3 = $request->img3;
        $SubPic4 = $request->img4;



        if ($main != $prop->MainPic && $request->has('img')) {
            $MainImageName = 'MainImage' . time() . '.' . $main->getClientoriginalExtension();
            $request->img->move('propertyPictures', $MainImageName);
            $prop->MainPic = $MainImageName;
        }

        if ($SubPic1 !=  $prop->SubPic1 && $request->has('img1')) {
            $Sub1ImageName = 'SubImage1' . time() . '.' . $SubPic1->getClientoriginalExtension();
            $request->img1->move('propertyPictures', $Sub1ImageName);
            $prop->SubPic1 = $Sub1ImageName;
        }

        if ($SubPic2 !=  $prop->SubPic2 && $request->has('img2')) {
            $Sub2ImageName = 'SubImage2' . time() . '.' . $SubPic2->getClientoriginalExtension();
            $request->img2->move('propertyPictures', $Sub2ImageName);
            $prop->SubPic2 = $Sub2ImageName;
        }

        if ($SubPic3 !=  $prop->SubPic3 && $request->has('img3')) {
            $Sub3ImageName = 'SubImage3' . time() . '.' . $SubPic3->getClientoriginalExtension();
            $request->img3->move('propertyPictures', $Sub3ImageName);
            $prop->SubPic3 = $Sub3ImageName;
        }

        if ($SubPic4 !=  $prop->SubPic4 && $request->has('img4')) {
            $Sub4ImageName = 'SubImage4' . time() . '.' . $SubPic4->getClientoriginalExtension();
            $request->img4->move('propertyPictures', $Sub4ImageName);
            $prop->SubPic4 = $Sub4ImageName;
        }

        $prop->updated_at = now();
        $prop->save();
        return redirect('PropertyList')->with('success', 'Property updated successfully!');
    }


    public function AddCity()
    {
        return view('admin.AddCity');
    }

    public function RegisterCity(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'img' => 'required',
        ]);
        $ct = new Cities();
        $ct->Name = $request->name;
        $MainImage = $request->img;

        $Sub4ImageName = 'City' . time() . '.' . $MainImage->getClientoriginalExtension();
        $request->img->move('City', $Sub4ImageName);
        $ct->Image = $Sub4ImageName;

        $ct->save();
        return back()->with('success', 'City Added successfully!');
    }

    public function CityList()
    {
        $city = Cities::orderBy('created_at', 'desc')->get();
        return view('admin.CityList', compact('city'));
    }


    public function EditCity($id)
    {
        $City = Cities::find($id);
        return view('admin.EditCity', compact('City'));
    }

    public function UpdateCity($id, Request $request)
    {
        $ct = Cities::find($id);
        $ct->Name = $request->name;

        if ($request->has('img') && $request->img != $ct->Image) {
            $MainImage = $request->img;
            $Sub4ImageName = 'City' . time() . '.' . $MainImage->getClientoriginalExtension();
            $request->img->move('City', $Sub4ImageName);
            $ct->Image = $Sub4ImageName;
        }

        $ct->save();
        return redirect('CityList')->with('success', 'City Updated Successfully');
    }

    public function DeleteCity($id)
    {
        $ct = Cities::find($id);
        $ct->delete();
        return back();
    }


    public function UserList()
    {
        $city = users::orderBy('created_at', 'desc')->get();
        return view('admin.userList', compact('city'));
    }



}
