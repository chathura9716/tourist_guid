<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PlaceController extends Controller
{
    
    public function store(Request $request){

        $validator = Validator::make($request ->all(),[
            'place_name' => 'required',
            'type' => 'required',
            'description' =>'required',
            'thumbnail' => 'required|image'

        ]);
        if($validator->fails()){
            return back()->with('status','Something is wrong!');
        }else{
            
        $imageName = time() . ".".$request ->thumbnail->extension();
        //save image in public folder
                $request->thumbnail->move(public_path('thumbnails'),$imageName );
                
                place::create([
                    'user_id'=>auth()->user()->id,
                    'place_name' => $request->place_name,
                    'type' => $request ->type,
                    'province' => $request ->province,
                    'city' => $request ->city,

                    'description'=>$request->description,
                    'thumbnail' =>$imageName
        
        
                ]);
            }
            return  redirect(route('dashboard'))->with('status','Place created successfully!');
    }
     
    public function welcomeplace(){
        $places = Place::all();
        // $latest_posts= Place::orderBy('created_at','DESC')->limit(1)->get();
       
            return view('places',compact('places'));

    }
    public function placemanage(){
        $places=Place::where('user_id',Auth::user()->id)->get();
        return view('admin/placesmanagement',compact('places'));
    }
    public function ViewAllPlaces(){
        $places=Place::all();
        return view('ViewAllPlaces',compact('places'));
    }

    public function show($placeId){

        $place = Place::findOrFail($placeId);

        $hotel=DB::table('hotels')->where('hotels.city','=', $place->city)->get();
        $vehical=DB::table('vehicals')->where('vehicals.city','=', $place->city)->get();
           
     
        return view('place.view',compact('place','hotel','vehical'));
    }

    public function edit($placeId){
        $place = Place::findOrFail($placeId);
      
        return view('place.edit',compact('place'));
    } 

    public function update($placeId,Request $request){
        //dd($request ->all());
        $imageName = time() . ".".$request ->thumbnail->extension();
        $request->thumbnail->move(public_path('thumbnails'),$imageName );

        Place::findOrFail($placeId)->update([
            'user_id'=>auth()->user()->id,
            'place_name' => $request->place_name,
            'type' => $request ->type,
            'province' => $request ->province,
            'city' => $request ->city,
            'description'=>$request->description,
            'thumbnail' =>$imageName


        ]);
  
        //save image in public folder
        return redirect(route('dashboard'))->with('status','place updated!');
    }

    public function delete($placeId){
        Place::FindOrFail($placeId)->delete();
        return redirect(route('dashboard'));
    }
}
