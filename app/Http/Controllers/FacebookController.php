<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Auth;
//use Illuminate\Http\Request;

class FacebookController extends Controller
{



    

    public function redirectToProvider($provider)
    {
    	return Socialite::driver($provider)->redirect();
    }

    public function handleProvidercallback($provider)
    {
    	try
    	{
    		$user = Socialite::driver($provider)->user();
            
    	}
    	 catch (Exeption $e)
    	 {
    	 	return redirect('login/$provider');
    	 }
         
         
    	 $authUser = $this->findOrCreateUser($user);

    	 auth()->login($authUser, true);

    	 return redirect('/session');
	
   }

      private function findOrCreateUser($facebookUser)
     	{
     		$authUser = User::where('email', $facebookUser->email)->first();
     		if($authUser)
     		{
     			return $authUser;
     		}

    		   return User::create([
    			'name' => $facebookUser->name,
                'username' =>$facebookUser->name,
     			'email' => $facebookUser->email,
     			]);
      	}
 }
