<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Session;
use App\Models\AppUsers;
use Illuminate\Support\Facades\Hash;
class UserInfoController extends Controller
{
    public function storeuser(Request $request){
     
      $validator = Validator::make($request->all(),[
        "name"=>"required",
        "username"=>"required",
        "email"=>"required|unique:app_users",
        "password"=> "required",
        "cpassword"=>"required",
        "phone"=>"required",
        "photo"=>"required",
        "dob"=>"required",
        "address"=> "required",
        "city"=> "required",
        "state"=> "required",
        "country"=> "required",
       
      ]);
      if ($validator->fails()) {
        return view('dashboard')
                    ->withErrors($validator);
                    
    }
    else{
      $userData= new AppUsers ;
      $userData->name=$request->name;
        $userData->username=$request->username;
        $userData->email=$request->email;
        $userData->password=Hash::make($request->password);
        $userData->phone=$request->phone;
        $imageName = time().'.'.$request->photo->getClientOriginalExtension();  
        $request->photo->move(public_path('images'), $imageName);
        $userData->photo=$imageName;
        $userData->dob=$request->dob;
        $userData->address=$request->address;
        $userData->city=$request->city;
        $userData->state=$request->state;
        $userData->country=$request->country;
        $userData->save();
        if($userData){
            Session::flash('message','Data Inserted Successsfully');
            return view('dashboard');
        }
        else{
          Session::flash('message','Somethin went wrong');
            return view('dashboard');
        }
    }
}
public function delete($id){
  $data= AppUsers::where('id',$id)->delete();
  if($data){
    Session::flash('message','Data Inserted Successsfully');
    return view('dashboard');
}
else{
  Session::flash('message','Somethin went wrong');
    return view('dashboard');
}
}
public function SelectUserEditDAta($id)
{
 
  $dataUser= AppUsers::where('id',$id)->first();
  return view('updateUser',compact('dataUser'));
}
public function updateUserData(Request $request)
{
  $validator = Validator::make($request->all(),[
    "name"=>"required",
    "username"=>"required",
    // "email"=>"required|unique:app_users",
    "password"=> "required",
    "phone"=>"required",
    "photo"=>"required",
    "dob"=>"required",
    "address"=> "required",
    "city"=> "required",
    "state"=> "required",
    "country"=> "required",
   
  ]);
  if ($validator->fails()) {
    return redirect()->back()
                ->withErrors($validator);
                
}
else{
  $userData= AppUsers::where('id',$request->id)->first();
  $userData->name=$request->name;
    $userData->username=$request->username;
    $userData->email=$request->email;
    $userData->password=Hash::make($request->password);
    $userData->phone=$request->phone;
    if(request()->hasFile('photo'))
    $imageName = time().'.'.$request->photo->getClientOriginalExtension();  
    $request->photo->move(public_path('images'), $imageName);
    $userData->photo=$imageName;
}
    $userData->dob=$request->dob;
    $userData->address=$request->address;
    $userData->city=$request->city;
    $userData->state=$request->state;
    $userData->country=$request->country;
    $userData->save();
    if($userData){
        Session::flash('message','Data Inserted Successsfully');
        return view('dashboard');
    }
    else{
      Session::flash('message','Somethin went wrong');
        return view('dashboard');
    }
}
public function viewDetails($id)
{
  $userdetails= AppUsers::where('id',$id)->first();
  return view('viewDetails',compact('userdetails'));
}
}
