<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
// public function customereditupdate(Request $request, $id){
        
//     // $this->validate($request, [
//     //     'customerName'=>'required',
//     //     'email' => 'required|email',
//     //     'customerAddressNo' => 'required',
//     //     'customerAddressStreet' => 'required',
//     //     'customerAddressCity' => 'required',
//     //     'phone' => 'required'
//     // ]);   
    
//     $customer = Customer::find($id);
//     $customer->customerName = $request->get('customerName');
//     $customer->customerAddressNo = $request->get('customerAddressNo');
//     $customer->customerAddressStreet = $request->get('customerAddressStreet');
//     $customer->customerAddressCity = $request->get('customerAddressCity');
//     if($request->file('image')){
//         $currentPhoto = Customer::find($id)->prophoto;  //fecthing user current photo

//         if($request->image != $currentPhoto){  //if not matched

//             $userPhoto = public_path('public/customerImage/').$currentPhoto;

//             if(file_exists($userPhoto)){

//                 @unlink($userPhoto); // then delete previous photo
                
//             }
        
//             if($request->file('image')){
//                 $file= $request->file('image');
//                 $filename= date('YmdHi').$file->getClientOriginalName();
//                 $file-> move(public_path('public/customerImage'), $filename);
//                 $customer->prophoto= $filename;
//             }
//         }
//     }
//     $customer->save();
    
//     $uid = Auth::user()->id;
//     $user = User::find($uid);
//     $user->email = $request->get('email');
//     $user->save();

//     $pno = UserPhone::all()->where('user_id','=',Auth::user()->id)->first();
//     $pno->phone = $request->get('phone');
//     $pno->save(); 

//     $ids =   Auth::user()->id;
//     return redirect()->route('customerprofile', [$ids]);
// }


// public function customerregistrationview(){
//     return view('register.regcustomer');
// }

// public function customerregistration(Request $request){
    

//     $this->validate($request, [
//         'name'=> 'required',
//         'no' => 'required',
//         'street' => 'required',
//         'city' => 'required',
//         'phoneno' => 'required',
//         'prophoto' => 'required',
//         'email' => 'required|email',
//         'password' => 'required',
        
//     ]);
//     $user = new User([
//         'email' => $request->get('email'),
//         'role' => ('customer'),
//         'password' => Hash::make($request->get('password'))
//     ]);
//     $user->save();

//     // $customer = new Customer([
//     //     'customerName' => $request->get('name'),
//     //     'customerAddressNo' => $request->get('no'),
//     //     'customerAddressStreet' => $request->get('street'),
//     //     'customerAddressCity' => $request->get('city'),
//     //     //'productImg' => $request->file('proImg'),
//     //     //'farmer_id' => $request->get('farmerId'),
//     // ]);

//     $customer =  new Customer([
//         'user_id' => DB::table('users')->where('email', $request->get('email'))->value('id'),
//         'customerName' => $request->get('name'),
//         'customerAddressNo' => $request->get('no'),
//         'customerAddressStreet' => $request->get('street'),
//         'customerAddressCity' => $request->get('city')
//     ]);
    
//     if (!$request->has('prophoto')) {
//         return response()->json(['message' => 'Missing file'], 422);
//     }
    
//     $image = $request->file('prophoto');
//     $imageName =date('YmdHi').'.' . $image->getClientOriginalExtension();
//     $image->move(public_path('public/customerImage'),$imageName);
//     $customer->prophoto =$imageName ;

//     $customer->save(); 

//     $userphone = new UserPhone([
//         'user_id' => DB::table('users')->where('email', $request->get('email'))->value('id'),
//         'phone' => $request->get('phoneno'),
//     ]);

//     $userphone->save(); 

//     return redirect('homelogin')->with('success','Customer added successfully.!');
    
//           
//     }