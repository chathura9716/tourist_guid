<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
use App\Models\User;
use App\Models\Post;
use App\Models\Place;
use App\Models\Tourist;
use App\Models\Hotel;
use App\Models\Booking;
use App\Models\Hagency;


use Illuminate\Http\Request;

class UserController extends Controller
{

    use RegistersUsers;
    public function dashboard()
    {
        //return view('welcome');

       
            $users = User::all();
            $posts = Post::where('user_id',Auth::user()->id)->get();
            $places = Place::all();
            $hotels = Hotel::where('user_id',Auth::user()->id)->get();
            
       
    
        
            $role=Auth::user()->role;
           
          
                    
                    if($role=='admin'){
                        
                        return view('admin.dashboard',compact('users','posts','places'));
                    }
                    if($role=='tourist'){
                        $data=array();
                        $data = DB::table('tourists')->where('user_id',Auth::user()->id)->first();
                        $posts = Post::where('user_id',Auth::user()->id)->get();
                        $latest_place= Place::orderBy('created_at','DESC')->limit(3)->get();
                        $bookinghotel=Booking::where('user_id',Auth::user()->id)->get();
                    
                        $hotel = Hotel::all();
                        
                        return view('user.tourist.dashboard',compact('bookinghotel','posts','data','hotel'));
                    }
                 
                    elseif($role=='Hagency'){
                        $data=array();
                        $data = DB::table('hagencies')->where('user_id',Auth::user()->id)->first();
                        

                        $bookinghotel=DB::table('hotels')
                        ->join('bookings', 'hotels.id', '=', 'bookings.hotel_id')
                        ->where('hotels.user_id','=',Auth::user()->id)
                        ->get();
                      
                        
                
                    
                     
                        
                        
                        
                       
                        // $bookinghotel=Booking::all();
                        
                        return view('user.hotel.dashboard',compact('hotels','posts','bookinghotel','data'));

                    }elseif($role=='Travel Agency'){
                        return view('user.travel.dashboard');
                    }
                    else{
                        return view('welcome');
                    }
       

        
    }

  
    // public function index(){
    //     return view('user.profile');
    // }
    public function profile(){
        {
            $role=Auth::user()->role;
    
            if($role=='admin'){
                
                return view('admin.adminprofile');
            }
            elseif($role=='tourist'){
                $data=array();
                $data = DB::table('tourists')->where('user_id',Auth::user()->id)->first();
                        

             
                return view('user.tourist.profile',compact('data'));

            }elseif($role=='Hagency'){
                $data=array();
                $data = DB::table('hagencies')->where('user_id',Auth::user()->id)->first();
                        

                return view('user.hotel.profile',compact('data'));

            }elseif($role=='Travel Agency'){

                return view('user.travel.profile');

            }
            
           
        }
     
    }
    //Add hotel view
    public function addhotel(){
        {
            $role=Auth::user()->role;
    
            if($role=='admin'){
                return view('admin.addhotel');
            }
            else{
                return view('user.dashboard');
            }
        }
     
        
    }
    
    public function adddriver(){
        {
            $role=Auth::user()->role;
    
            if($role=='Travel Agency'){
                return view('user.travel.adddriver');
            }
            else{
                return view('user.dashboard');
            }
        }
     
    }
    
    //Add travel view
    public function addtravel(){
        {
            $role=Auth::user()->role;
    
            if($role=='admin'){
                return view('admin.addtravel');
            }
            else{
                return view('user.dashboard');
            }
        }
     
    }
  
    public function edit($userId){
        
        $user = User::findOrFail($userId);
        return view('user.edit',compact('user'));

    }
    public function delete($userId){
        User::FindOrFail($userId)->delete();
        return redirect(route('dashboard'));
    }
    
    
    public function update($userId,Request $request){
        //dd($request ->all());
        User::findOrFail($userId)->update($request ->all());
        return redirect(route('dashboard'))->with('status','user updated!');
    }
    public function createUser(Request $request)
    {
         User::create([
            'name'=>$request->name,
            'email' => $request->email,
           
            'password' => Hash::make($request->password),
            'role'=>$request->role,
          
        ]);

        return redirect(route('dashboard'))->with('success','User Added!');
    }
    public function createHotelAgency(Request $request)
    {
        $request ->validate([
     
            'reg_no'=>'required',
            'agency_name'=>'required',
            'contact'=>'required',
            'location'=>'required',
            'email'=>'required|email',
            'password'=>'required',
        ]);
        $user =new User([
            'email'=>$request->get('email'),
            'password'=>Hash::make($request->get('password')),
            'role'=>('Hagency')
        ]);
        $user ->save();

        $hagency =new Hagency([
            'user_id'=>DB::table('users')->where('email',$request->get('email'))->value('id'),
            'reg_no'=>$request->get('reg_no'),
            'agency_name'=>$request->get('agency_name'),
            
            'contact'=>$request->get('contact'),
            'location'=>$request->get('location'),
            



        ]);
      

        $res = $hagency ->save();

        if($res){
            return redirect()->back()->with('success','Hotel Agent  now registered!!!');
        }else{
            return redirect()->back()->with('fail','Fail to register');

        }
    }
    public function createUserPage(){
        return view('admin.addhotel');
    }
    
}

