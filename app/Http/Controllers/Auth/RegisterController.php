<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Redirect;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo()
    {
        $role_id = auth()->user()->role_id;
        if($role_id==1){
            Auth::logout();
            Session::flash('alert-class', 'alert-success'); 
            Session::flash('message', 'Congratulation!  Your account has been registered successfully. So, Please check your email for the verification.');
            return '/register';

        }else if($role_id==2){
            Auth::logout();
            Session::flash('alert-class', 'alert-success'); 
            Session::flash('message', 'Congratulation!  Your account has been registered successfully. So, Please check your email for the verification.');
            return '/doctor/register';
        }else{
            Auth::logout();
            Session::flash('alert-class', 'alert-success'); 
            Session::flash('message', 'Congratulation!  Your account has been registered successfully. So, Please check your email for the verification.');
            return '/consumer/register';
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required','confirmed'],
            'gender' => ['required'],
            'state_id' => ['required'],
            'city_id' => ['required'],
            'date_of_birth' => ['required'],
            'mobile_number' => ['required'],
        ]);
        
        

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
     return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
            'gender' => $data['gender'],
            'state_id' => $data['state_id'],
            'city_id' => $data['city_id'],
            'date_of_birth' => $data['date_of_birth'],
            'mobile_no' => $data['mobile_number'],
        ]);
       
    }
}
