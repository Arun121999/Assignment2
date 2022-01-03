<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $doctor = User::where('role_id',2)->where('email_verified_at','!=',null)->get();
        return view('home',compact('doctor'));
    }


    public function updateStatus(Request $request)
    {
        
        $doctor = User::find($request->id);
        $doctor->is_approved = $request->status;
        $doctor->save();
        if($request->status==1){
            $alert_class = "alert-success";
        }else{
            $alert_class = "alert-danger";
        }
        return response()->json(['status'=>200,'alert_class'=>$alert_class,'message'=>'Status changed successfully.']);
    }
}
