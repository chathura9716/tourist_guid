<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Tourist;
use Illuminate\Support\Facades\Hash;

class TouristController extends Controller
{
    
    public function dashboardTourist(){
        //$posts = Post::where('user_id',Auth::user()->id)->get();
        return view('user.tourist.dashboard');
    }
    public function createTourist(){
        return view('user.tourist.register');
    }
    public function loginTourist(){
        return view('user.tourist.login');
    }

}