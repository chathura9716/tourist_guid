<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{

    use RegistersUsers;
    public function dashboard()
    {
        //return view('welcome');
        
            $role=Auth::user()->role;
           
          

                    if($role=='admin'){
                        return view('admin.dashboard');
                    }
                    elseif($role=='user'){
                        return view('user.tourist.dashboard');
                    }elseif($role=='Hotel Agency'){
                        return view('user.hotel.dashboard');

                    }elseif($role=='Travel Agency'){
                        return view('user.travel.dashboard');
        
                    }elseif($role=='Driver'){
                        return view('user.driver.dashboard');
        
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
            elseif($role=='user'){
                return view('user.tourist.profile');
            }elseif($role=='Hotel Agency'){
                return view('user.hotel.profile');

            }elseif($role=='Travel Agency'){
                return view('user.travel.profile');

            }
            elseif($role=='Driver'){
                return view('user.driver.profile');

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
    public function hotel(){
        {
            $role=Auth::user()->role;
    
            if($role=='Hotel Agency'){
                return view('user.hotel.addhotel');
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
    
    public function update($userId,Request $request){
        //dd($request ->all());
        User::findOrFail($userId)->update($request ->all());
        return redirect(route('dashboard'))->with('status','user updated!');
    }
    public function createUser(Request $request)
    {
         User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'dob'   => $request->dob,
            'nic'   => $request->nic,
            'contact'=> $request->contact,
            'email' => $request->email,
           
            'password' => Hash::make($request->password),
            'role'=>$request->role,
        ]);

        return redirect(route('dashboard'))->with('status','Hotel Argency Added!');
    }
}

