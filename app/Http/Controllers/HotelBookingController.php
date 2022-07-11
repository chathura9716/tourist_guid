<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Booking;
use Illuminate\Support\Facades\Validator;

class HotelBookingController extends Controller
{
    public function store(Request $request){

        $validator = Validator::make($request ->all(),[
            'tourist_name' => 'required',
            'email' => 'required',
            'hotel' =>'required',
            'checkin' =>'required',
            'checkout'=>'required',

        ]);
        if($validator->fails()){
            return back()->with('status','Something is wrong!');
        }else{
           
           $id= Session::get ('loginId');
                Booking::create([
                    'tourist_id'=>$id,
                    'tourist_name' => $request->tourist_name,
                    'country' => $request ->country,
                    'email' => $request ->email,
                    'hotel' => $request ->hotel,

                    'checkin'=>$request->checkin,
                    'checkout' =>$request->checkout,
                    'comfort' => $request ->comfort,
                    'adults' => $request ->adults,
                    'childrens' => $request ->childrens,
                    'rooms' => $request ->rooms,
                    'message' => $request ->message,
                    

        
        
                ]);
            }
            return  redirect(route('tourist_dashboard'))->with('status','booking request send successfully!');
    }
    
    public function delete($bookingId){
        Booking::FindOrFail($bookingId)->delete();
        return redirect(route('tourist_dashboard'))->with('booking request delete successfully!!');
    }
}
