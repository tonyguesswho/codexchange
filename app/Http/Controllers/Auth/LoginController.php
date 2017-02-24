<?php

namespace App\Http\Controllers\Auth;
use Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\User;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

   // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     *//// @var string
    // */
   // protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     *//// @return void
     //*/
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }


     /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }
     
     
    public function handleProviderCallback(Request $request)
    {
        try{
            $user = Socialite::driver('facebook')->user();

    }catch (Exception $se)
    {
        return redirect('auth/facebook');
    }
    dd($user);
    $authUser = $this->findOrCreateUser($user);
    Auth::login($authUser, true);
    return redirect('post.session');
        

       }

    public function createOrGetUser($facebookUser)
    {
        
        $authUser = User::where('email', $facebookUser->email)->first();
        if ($authUser){
            return $authUser;
        }

        return User::create([
            'name' => $facebookUser->name,
            'username' => $facebookUser->name,
            'email' => $facebookUser->email,
            'phone' => $facebook->phone,
            'password' => $facebook->password

            ]);
    }
     
}
