<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Register;
use App\Models\User;

class RegsController extends Controller
{
  public function submit(Request $request){
    $validate=$request->validate([
        'firstname'=>'required','lastname'=>'required',
        'email'=>'required|email','phonenumber'=>'required',
        'dob'=>'required','gender'=>'required',
        '<portlet:namespace/>Country'=>'required',
        '<portlet:namespace/>State'=>'required',
        'city'=>'required','hobbies'=>'required'

    ]);
    $name=$request->input('firstname');
    $names=$request->input('lastname');
    $email=$request->input('email');

    $phno=$request->input('phonenumber');
    $dob=$request->input('dob');
    $gender=$request->input('gender');
    $country=$request->input('<portlet:namespace/>Country');
    $state=$request->input('<portlet:namespace/>State');
    $city=$request->input('city');
    $hobbies=$request->input('hobbies');
    $img=$request->input('file');
    $pass=rand(1000,9999);
    User::create(['name'=>$name,'email'=>$email,'password'=>Hash::make($pass) ]);
                  
    $u_id=User::where('email',$email)->pluck('id');
    // echo $u_id[0];
   
    $to= $email;
    $msg="your password is : $pass";
    Mail::raw($msg,function($mymail)use($to){
      $mymail->to($to)->subject('Registration Success');
    });
    
    
    Register::create(['first_name'=>$name,'last_name'=>$names,
                      'email'=>$email,'phone_number'=>$phno,
                      'gender'=>$gender,'date_of_birth'=>$dob,
                      'country'=>$country,'state'=>$state,
                      'city'=>$city,'hobbies'=>$hobbies,
                      'avatar'=>$img,'user_id'=>$u_id[0]
  ]);
 
                   @session()->flash('success','great');
                   return redirect('/about');

   }

  //  for login 
   public function login(Request $request){
    $request->validate(['email'=>'required','password'=>'required']);
    $check=$request->only('email','password');

   if( Auth::attempt($check)){
       return  redirect('/');
   }else {
    return "incorrect password";
   }

   }

// for logout
 public function logout(){
  Auth::logout();
  $request->session()->invalidate();
  $request->session()->regenerateToken();
 }
}
