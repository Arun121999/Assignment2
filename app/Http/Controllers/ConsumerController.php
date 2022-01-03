<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Auth;
use App\Models\User;


class ConsumerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['verified'])->except('register');
    }
    public function register(){
        return view('consumer.auth.register');
    }

    public function dashboard(){
        return view('consumer.dashboard');
            
    }
}
