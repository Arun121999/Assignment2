<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Auth;
use App\Models\User;
use App\Models\State;
use App\Models\City;
use Redirect;
use Session;


class DoctorController extends Controller
{


    public function __construct()
    {
        $this->middleware(['verified'])->except(['register','getCities']);
    }

    public function register(){
        $states = State::get();
        return view('doctor.auth.register', compact('states'));
    }

    public function getCities(Request $request){
        $cities = City::where('state_id',$request->id)->get();
        $json = array();
            foreach($cities as $city){
                $json[$city->id] = $city->name;
            }
    
        return $json;
   
    }

    public function dashboard(){
        if (Gate::allows('is_approved', Auth::user())) {
            return view('doctor.dashboard');
        }else{
            Auth::logout();
            Session::flash('alert-class', 'alert-danger'); 
            Session::flash('message', 'Yet your account is not approved by the admin. Please wait for the approval from the admin.');
            return Redirect::route('login');
        }
    }


    public function profile(){
       return view('doctor.profile');
    }
}
