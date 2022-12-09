<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth,Guest;


use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
//use DB;
use App\Models\Tourist;
use App\Models\Post;
use App\Models\User;

use Session;

class TouristregisterController extends Controller
{
   
    function create(Request $request)
    {
        $validator = Validator::make($request ->all(),[
            'first_name'=>'required',
            'last_name'=>'required',
            'age'=>'required',
            'gender'=>'required',
            'origin'=>'required',
            'passport_no'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'thumbnail' => 'required|image'
        ]);
        if($validator->fails()){
            return back()->with('status','Something is wrong!');
        }else{
        $user =new User([
            'email'=>$request->get('email'),
            'password'=>Hash::make($request->get('password')),
            'role'=>('tourist')
        ]);
        $user ->save();

                $imageName = time() . ".".$request ->thumbnail->extension();
        //save image in public folder
                $request->thumbnail->move(public_path('thumbnails'),$imageName );
                
        $tourist =new Tourist([
            'user_id'=>DB::table('users')->where('email',$request->get('email'))->value('id'),
            'first_name'=>$request->get('first_name'),
            'last_name'=>$request->get('last_name'),
            'thumbnail' =>$imageName,
            'age'=>$request->get('age'),
            'gender'=>$request->get('gender'),
            'origin'=>$request->get('origin'),
            'passport_no'=>$request->get('passport_no'),

        ]);
      

        $res = $tourist ->save();

        if($res){
            return redirect(route('login'))->with('success','You are now registered');
        }else{
            return redirect()->back()->with('fail','Fail to register');

        }

    }
          

       
      
         
    }
    
    
}
