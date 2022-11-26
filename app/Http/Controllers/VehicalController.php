<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehical;
use Illuminate\Support\Facades\Validator;
use DB;
use Auth;

class VehicalController extends Controller
{
    public function store(Request $request){

        $validator = Validator::make($request ->all(),[
            'vehical_model' => 'required',
            'type' => 'required',
            'city' => 'required',
            'thumbnail' => 'required|image'


       

        ]);
        if($validator->fails()){
            return back()->with('status','Something is wrong!');
        }else{
            
        $imageName = time() . ".".$request ->thumbnail->extension();
        //save image in public folder
                $request->thumbnail->move(public_path('thumbnails'),$imageName );
                
                Vehical::create([
                    'user_id'=>auth()->user()->id,
                    'vehical_model' => $request->vehical_model,
                    'driver_name' => $request ->driver_name,
                    'driver_lno' => $request ->driver_lno,
                    'vehical_no' => $request ->vehical_no,

                    'city' => $request ->city,
                    'type' => $request ->type,
                    'thumbnail' =>$imageName
                ]);
            }
            return  redirect(route('dashboard'))->with('status','vehical Added successfully!');
    }
     
    // public function welcomehotel(Request $request){

    //     $search = $request['search'] ?? "";
    //     if($search !=""){
    //         $hotels=Hotel::where("city","LIKE","$search%")->get();
    //     }else{
    //         $hotels = Hotel::all();
    //     }

  
    //     // $latest_posts= Place::orderBy('created_at','DESC')->limit(1)->get();
       
    //         return view('hotel',compact('hotels'));

    // }
    // public function Addhotelview()
    // {
    //     $data=array();
    //     $data = DB::table('hotels')->where('user_id',Auth::user()->id)->first();
                
    //     return view('user.hotel.addhotel',compact('data'));
    // }

    public function show($vehicalId){

        // $data=array();
        // $data = DB::table('hotels')->where('user_id',Auth::user()->id)->first();
                
        $vehical = Vehical::findOrFail($vehicalId);

        return view('vehical.view',compact('vehical'));
    }

    public function edit($vehicalId){
        $vehical = Vehical::findOrFail($vehicalId);
        return view('vehical.edit',compact('vehical'));
    } 
   

    public function update($vehicalId,Request $request){
        //dd($request ->all());
        $imageName = time() . ".".$request ->thumbnail->extension();
        $request->thumbnail->move(public_path('thumbnails'),$imageName );

        Vehical::findOrFail($vehicalId)->update([

            
                'user_id'=>auth()->user()->id,
                'vehical_model' => $request->vehical_model,
                'driver_name' => $request ->driver_name,
                'driver_lno' => $request ->driver_lno,
                'vehical_no' => $request ->vehical_no,

                'city' => $request ->city,
                'type' => $request ->type,
                'thumbnail' =>$imageName
            ]);
        return redirect(route('dashboard'))->with('status','Vehical updated!');
    }

    public function delete($vehicalId){
        Vehical::FindOrFail($vehicalId)->delete();
        return redirect(route('dashboard'));
    }
    // public function hotelmanage(){
    //     $hotels = Hotel::where('user_id',Auth::user()->id)->get();
       
    //     return view('user/hotel/hotelmanagement',compact('hotels'));
    // }
    public function vehicalmanage(){
        $vehical=Vehical::all();
        return view('admin/vehicalmanagement',compact('vehical'));
    }
    
}

