<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function show($placeId){

        $post = Post::findOrFail($placeId);
        return view('posts.show',compact('post'));
    }

    public function edit($placeId){
        $post = Post::findOrFail($placeId);
        return view('posts.edit',compact('post'));
    } 

    public function update($placeId,Request $request){
        //dd($request ->all());
        Post::findOrFail($placeId)->update($request ->all());
        return redirect(route('posts.all'))->with('status','Post updated!');
    }

    public function delete($placeId){
        Post::FindOrFail($placeId)->delete();
        return redirect(route('posts.all'));
    }
}
