<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Auth;



class sessionController extends Controller
{
    
    
     use AuthenticatesUsers;

    protected $redirectTo = '/session';



    public function __construct()
    {

	//restricts movemrnts to only logout
    	$this->middleware('guest',['except' => 'destroy']);
    }


    protected function redirectTo()
    {
        return '/session';
    }


    public function create()
    {
    	return view('session.create');
    }


    public function store()
    {
    	if(!auth()->attempt(request(['email', 'password']))){

    		return back()->withErrors([

    			'message' => 'invalid email or password'

    			])->withInput(Request()->except('user_id'));
    		}

		return redirect('/session')->with('status', 'LOG IN SUCCESSFULL!');
	}
   //this logs a user out
     public function destroy()
     {

        auth()->logout();

        return redirect('/');
    }
}
