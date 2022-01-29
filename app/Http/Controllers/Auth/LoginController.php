<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Socialite;
use Exception;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    
    public function handleProviderCallback()
    {

        try{

        $user = Socialite::driver('google')->user();
        return '<h1>'. $user->email .'</h1>';

        } catch(Exception $e){
            return redirect()->to(route('login'));
        }

    }

//
  //  public function redirectToProvider()
  //  {
  //      return Socialite::driver('facebook')->redirect();
  //  }

  //  public function handleProviderCallback()
  //  {
  //      $user = Socialite::driver('facebook')->user();
  //              return '<h1>'. $user->email .'</h1>';

   // }
}
