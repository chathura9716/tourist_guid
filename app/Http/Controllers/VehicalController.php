<?php

namespace App\Http\Controllers;
use App\Models\Vehical;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class VehicalController extends Controller
{
    public function store(Request $request){

        $validator = Validator::make($request ->all(),[
            'model' => 'required',
            'driver_name' => 'required',
            'licence_no' =>'required',
            'type' =>'required',
            'city' =>'required',
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
                    'model' => $request->model,
                    'driver_name' => $request->driver_name,
                    'contact' => $request->contact,
                    'licence_no' => $request->licence_no,
                    'vehical_no' => $request ->vehical_no,
                    'type' => $request ->type,
                   
                    'city' => $request ->city,
                    'thumbnail' =>$imageName
        
                ]);
            }
            return  redirect(route('dashboard'))->with('status','Vehical Added successfully!');
    }
    public function update($vehicalId,Request $request){
        //dd($request ->all());
        $imageName = time() . ".".$request ->thumbnail->extension();
        //save image in public folder
                $request->thumbnail->move(public_path('thumbnails'),$imageName );
        Vehical::findOrFail($vehicalId)->update([
            'user_id'=>auth()->user()->id,
            'model' => $request->model,
            'driver_name' => $request->driver_name,
            'contact' => $request->contact,
            'licence_no' => $request->licence_no,
            'vehical_no' => $request ->vehical_no,
            'type' => $request ->type,
           
            'city' => $request ->city,
            'thumbnail' =>$imageName

        ]);
        return redirect(route('dashboard'))->with('status','vehical updated!');
    }
    public function delete($vehicalId){
        Vehical::FindOrFail($vehicalId)->delete();
        return redirect(route('dashboard'));
    }
    public function edit($vehicalId){
        $vehical = Vehical::findOrFail($vehicalId);
      
        return view('admin.editvehical',compact('vehical'));
    } 
    public function vehicalmanage(){
        $vehical=Vehical::all();
        return view('admin/vehicalmanagement',compact('vehical'));
    }
    public function vehicalshow($vehicalId){

        $vehical=Vehical::FindOrFail($vehicalId);
        return view('vehical.show',compact('vehical'));
    }
}
