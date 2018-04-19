<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Socialite;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout() {
        \Auth::logout();
        return redirect('/login');
    }    

    use AuthenticatesUsers;
    
    
    protected function authenticated(Request $request, $user)
    {
        return $user;
        /*
        if ( $user->isAdmin() ) {// do your margic here
            return redirect()->route('dashboard');
        }
    
        return redirect('/home');
        */
    }    

  /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();

        return $user->name ;
        /**
         * 
User {#207 ▼
  +token: "ya29.GlsQBaSz9I1wTHEUhoK2nr5v0V2tBDv-yeX_Z9AM4qGpN3Jj1asNs1l4vxSKuJymmHjl1K2LZm6l4-qlyhiFXVevcWQ5EmJYIYiWzHNVS5BYa3xYwUir6b2r7teU"
  +refreshToken: null
  +expiresIn: 3599
  +id: "117514074006021872327"
  +nickname: null
  +name: "Milan Vlaskovic"
  +email: "milan.vlaskovic@gmail.com"
  +avatar: "https://lh4.googleusercontent.com/-8kFFQD_RYTQ/AAAAAAAAAAI/AAAAAAAAFqs/bw-mcIp1JBo/photo.jpg?sz=50"
  +user: array:14 [▶]
  +"avatar_original": "https://lh4.googleusercontent.com/-8kFFQD_RYTQ/AAAAAAAAAAI/AAAAAAAAFqs/bw-mcIp1JBo/photo.jpg"
}
         */
    }   
    
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToTwitterProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleTwitterProviderCallback()
    {
        $user = Socialite::driver('twitter')->user();

        return $user->name ;    
    }
   
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToFacebookProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleFacebookProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        return $user->name ;    
    }        
}
