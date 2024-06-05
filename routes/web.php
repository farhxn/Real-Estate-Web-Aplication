<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Main Website Routes

//get
Route::get('/',[MainController::class,'index']);
Route::get('/PropertyDetail/{id}',[MainController::class,'PropertyDetail']);
Route::get('/Properties',[MainController::class,'PropertyList']);
Route::get('/CityWiseList/{id}',[MainController::class,'CityWiseList']);
Route::get('/search-properties', [MainController::class, 'searchProperties']);
Route::get('/sort-properties', [MainController::class, 'sortProperties'])->name('sort.properties');
Route::get('/ContactUs', [MainController::class, 'ContactUs']);
Route::get('/AboutUs', [MainController::class, 'AboutUs']);
Route::get('/Register', [MainController::class, 'Register'])->middleware('alreadyLoggedIn');
Route::get('/Login', [MainController::class, 'Login'])->middleware('alreadyLoggedIn');
Route::get('/Logout', [MainController::class, 'Logout']);
Route::get('/activate/{code}', [MainController::class, 'activateAccount']);
Route::get('/Agencies', [MainController::class, 'Agencies']);
Route::get('/AgencyDetail/{id}', [MainController::class, 'AgencyDetail']);
Route::get('/Agentes', [MainController::class, 'Agent']);
Route::get('/AgentDetail/{id}', [MainController::class, 'AgentDetail']);
Route::get('/AddPropertyUser', [MainController::class, 'AddProperty'])->middleware('UserAuth');
Route::get('/CreateAgency', [MainController::class, 'CreateAgency'])->middleware('UserAuth');
Route::get('/AddAgent', [MainController::class, 'CreateAgent']);
Route::get('/EditAgency', [MainController::class, 'EditAgency']);
Route::get('/EditProfile', [MainController::class, 'EditProfile']);
Route::get('/MyProperties', [MainController::class, 'MyProperties'])->middleware('UserAuth');


//Post
Route::post('/RegisterUser', [MainController::class, 'RegisterUser']);
Route::post('/LoginUser', [MainController::class, 'LoginUser']);
Route::post('/RegisterAgency', [MainController::class, 'RegisterAgency']);
Route::post('/RegisterAgent', [MainController::class, 'RegisterAgent']);
Route::post('/UpdateAgency', [MainController::class, 'UpdateAgency']);
Route::post('/UpdateUser', [MainController::class, 'UpdateUser']);

//Main Website Routes end



//Admin Website Routes

//GET
Route::get('/AdminHome',[AdminController::class,'index'])->middleware('AdminAuth');
Route::get('/AddProperty',[AdminController::class,'AddProperty'])->middleware('AdminAuth');
Route::get('/PropertyList',[AdminController::class,'PropertyList'])->middleware('AdminAuth');
Route::get('/EditProperty/{id}',[AdminController::class,'EditProperty'])->middleware('AdminAuth');

Route::get('/AddCity',[AdminController::class,'AddCity'])->middleware('AdminAuth');
Route::get('/CityList',[AdminController::class,'CityList'])->middleware('AdminAuth');
Route::get('/EditCity/{id}',[AdminController::class,'EditCity'])->middleware('AdminAuth');
Route::get('/UserList',[AdminController::class,'UserList'])->middleware('AdminAuth');
Route::get('/UserEdit/{id}',[AdminController::class,'UserEdit'])->middleware('AdminAuth');

//POST
Route::post('/RegisterProperty',[AdminController::class,'RegisterProperty']);
Route::post('/DeleteProperty/{id}',[AdminController::class,'DeleteProperty']);
Route::post('/StatusProperty/{id}',[AdminController::class,'ChangeStatusProperty']);
Route::post('/UpdateProperty/{id}',[AdminController::class,'UpdateProperty']);
Route::post('/RegisterCity',[AdminController::class,'RegisterCity']);
Route::post('/DeleteCity/{id}',[AdminController::class,'DeleteCity']);
Route::post('/UpdateCity/{id}',[AdminController::class,'UpdateCity']);

