<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;

class ScopeController extends Controller
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

    Register::create(['first_name'=>$name,'last_name'=>$names,
                      'email'=>$email,'phone_number'=>$phno,
                      'gender'=>$gender,'date_of_birth'=>$dob,
                      'country'=>$country,'state'=>$state,
                      'city'=>$city,'hobbies'=>$hobbies,
                      'avatar'=>$img
  ]);
                  
                   @session()->flash('success','great');
                   return redirect('/about');

  }
}
