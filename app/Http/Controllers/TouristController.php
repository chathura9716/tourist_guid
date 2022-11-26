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
    
    public function touristprofileupdate(Request $request){
        $uid = Auth::user()->id;
        $tourist = Tourist::find($uid);
        $tourist->first_name = $request->get('first_name');
        $tourist->last_name = $request->get('last_name');
        $tourist->age = $request->get('age');
        $tourist->gender = $request->get('gender');
        $tourist->origin = $request->get('origin');
        $tourist->passport_no = $request->get('passport_no');
        
        
       
        //if($request->file('thumbnail')){
            //         $currentPhoto = User::find($id)->thumbnail;  //fecthing user current photo
    
            //         if($request->image != $currentPhoto){  //if not matched
    
            //             $userPhoto = public_path('public/userImage/').$currentPhoto;
    
            //             if(file_exists($userPhoto)){
    
            //                 @unlink($userPhoto); // then delete previous photo
                            
            //             }
                    
            //             if($request->file('thumbnail')){
            //                 $file= $request->file('thumbnail');
            //                 $filename= date('YmdHi').$file->getClientOriginalName();
            //                 $file-> move(public_path('public/customerImage'), $filename);
            //                 $user->thumbnail= $filename;
            //             }
            //         }
            //     }
        $tourist->email = $request->get('email');
        $tourist->save();

      

        $ids =   Auth::user()->id;
        return redirect()->route('profile', [$ids]);
        }
       
    

}