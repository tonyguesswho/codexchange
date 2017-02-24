<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
   public function create(){
   	return view('register.create');
   }

   public function store(){
   	//validate the user
   	$this->validate(request(),[
   		'name' => 'required',
   		'username' => 'required',
   		'email' => 'required',
   		'phone' => 'required',
   		'password' => 'required|confirmed'
   		]);

// create and save users
   	 $user = User::create([
    'name' =>request('name'),
    'username' => request('username'),
    'email'=>request('email'),
    'phone' => request('phone'),
    'password' => bcrypt(request('password'))]);

   	 //login users in

   	 auth()->login($user);

   	 return redirect('/session')->withInput(Request()->except('user_id'))->with('status', 'SIGN UP SUCCESSFULL!');



   }
}
