<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Models\Tourist;

class TouristregisterController extends Controller
{
    use RegistersUsers;
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'user_name' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'origin' => ['required', 'string', 'max:255'],
            'passport_no' => ['required', 'string', 'max:255'],

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {
        $posts = Post::where('tourist_id',Auth::tourist()->id)->get();
        
     Tourist::create([
          

            'user_name'=>$request->user_name,
            'age'=>$request->age,
            'gender'=>$request->gender,
            'origin'=>$request->origin,
            'passport_no'=>$request->passport_no,
            'email'=>$request->email,
            
            'password'=> Hash::make($request->password),
            
        ]);
        return redirect(route('tourist_dashboard',compact('posts')));
         
    }
}
