<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Tourist;
use App\Models\Place;
use App\Models\Hotel;
use App\Models\Booking;
use App\Models\User;


use DB;


use Illuminate\Support\Facades\Hash;
use Session;

class TouristController extends Controller
{
    
  
    public function createTourist(){
        return view('user.tourist.register');
    }
    public function editprofile(){
        $user = Auth()->user();
        $data=array();
        $data = DB::table('tourists')->where('user_id',Auth::user()->id)->first();
      
        return view('user.tourist.editprofile',compact('data','user'));
    }
    public function loginTourist(){
        return view('user.tourist.login');
    }
    public function touristWelcome(){
        
        $latest_place= Place::orderBy('created_at','DESC')->limit(3)->get();
        $hotel =Hotel::all();
        return view('user.tourist.welcome',compact('hotel','latest_place'));
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
    public function touristHotel(){
        $hotel =Hotel::all();
        return view('user.tourist.hotel',compact('hotel'));
    }
    
    public function touristprofileupdate($userId,Request $request){
         //dd($request ->all());
       
        $imageName = time() . ".".$request ->thumbnail->extension();
        //save image in public folder
                $request->thumbnail->move(public_path('thumbnails'),$imageName );
       
               
        Tourist::findOrFail($userId)->update([
            
           'user_id'=>auth()->user()->id,
           'first_name' => $request->first_name,
           'last_name' => $request ->last_name,
            'thumbnail' => $imageName,
            
            'age' => $request ->age,
            'gender'=>$request->gender,
            
            'origin' => $request ->origin,
            'passport_no'=>$request->passport_no,
            
        
        ]);
        return redirect(route('dashboard'))->with('status','user updated!');
        }
       
    

}