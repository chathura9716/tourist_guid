<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Tourist;
use App\Models\Place;
use Illuminate\Support\Facades\Hash;
use Session;

class TouristController extends Controller
{
    
    public function dashboardTourist(){
        //$posts = Post::where('user_id',Auth::user()->id)->get();
        $data =array();
        if(Session::has ('loginId')){
            $data =Tourist::where('id', '=',Session::get ('loginId'))->first();

        }
        return view('user.tourist.dashboard',compact('data'));
    }
    public function createTourist(){
        return view('user.tourist.register');
    }
    public function loginTourist(){
        return view('user.tourist.login');
    }
    public function touristWelcome(){
        return view('user.tourist.welcome');
    }
    public function touristPlace(){
        $places = Place::all();
        return view('user.tourist.places',compact('places'));
    }
    public function touristContact(){
        return view('user.tourist.contact');
    }
    public function touristBlog(){
        $posts = Post::all();
        $latest_posts= Post::orderBy('created_at','DESC')->limit(1)->get();
       
            return view('user.tourist.blog',compact('posts','latest_posts'));
    }
    public function touristProfile(){
        $data =array();
        if(Session::has ('loginId')){
            $data =Tourist::where('id', '=',Session::get ('loginId'))->first();

        }
        return view('user.tourist.profile',compact('data'));
    }

}