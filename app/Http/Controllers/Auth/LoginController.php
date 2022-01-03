<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Redirect;
use Session;

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

    protected function redirectTo()
    {
        $role_id = auth()->user()->role_id;
        if(Auth::user()->email_verified_at!=null){
        switch ($role_id) {
              case 1:
                return '/superadmin/dashboard';
                break;
              case 2:
                return '/doctor/dashboard';
                break;
              case 3:
                return '/consumer/dashboard';
                break;
              default:
               return '/';
            }
        }else{
          Auth::logout();
          Session::flash('alert-class', 'alert-danger'); 
          Session::flash('message', 'Your account is not verified yet. So, Please check your registered email id for the verfication.');
          return 'login';
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
