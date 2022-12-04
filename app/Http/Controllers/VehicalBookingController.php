<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\VehicalBooking;
use Illuminate\Support\Facades\Validator;
use DB;
use Auth;

class VehicalBookingController extends Controller
{
    public function store(Request $request){

        $validator = Validator::make($request ->all(),[
            
            'tourist_name' => 'required',
            'email' => 'required',
            'vehical_id' =>'required',
          
            'pickup' =>'required',
            'dropoff'=>'required',
            'pickuptime'=>'required'

        ]);
        
        if($validator->fails()){
            return redirect()->back()->with('fail','Something is wrong! are you logged in?');
        }
        else
        {
            
          
            VehicalBooking::create([
                  
                'user_id'=>Auth::user()->id,
                'tourist_name' => $request->tourist_name,
                'country' => $request ->country,
                'email' => $request ->email,
               
                'vehical_id' =>$request ->vehical_id,
               // 'agent_id'->$request->agent_id,
                'pickup'=>$request->pickup,
                'dropoff' =>$request->dropoff,
            
                'pickuptime' => $request ->pickuptime,
                

    
    
            ]);
            return  redirect(route('dashboard'))->with('success','vehical booking request send successfully!');
        }
    }
       
        
    
    
    public function accept($bookingId){
        $book = VehicalBooking::findOrFail($bookingId);
        $book ->action = "Accepted";
        $book->save();
        return redirect()->back();
    }
    public function cancel($bookingId){
        $book = VehicalBooking::findOrFail($bookingId);
        $book ->action = "Cancelled";
        $book->save();
        return redirect()->back();
    }
    
    public function delete($bookingId){
        VehicalBooking::FindOrFail($bookingId)->delete();
        return redirect(route('dashboard'))->with('booking request delete successfully!!');
    }
    public function vehicalBookingManage() {
        
        // $data=array();
        // $data = DB::table('hagencies')->where('user_id',Auth::user()->id)->first();
                        

        $bookingvehicals=DB::table('vehicals')
                    ->join('vehical_bookings', 'vehicals.id', '=', 'vehical_bookings.vehical_id')
                    ->where('vehicals.user_id','=',Auth::user()->id)
                    ->get();
                      
                    return view('admin.vehicalbookingmanage',compact('bookingvehicals'));
    }
}
