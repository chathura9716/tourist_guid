<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicalBooking extends Model
{
    use HasFactory;
    protected $fillable = [
       
        'user_id',
        'tourist_name',
        'country',
        'email',
        'vehical_id',
        'pickup',
        'dropoff',
       
        'pickuptime',

    ];
    // public function user(){
    //     return $this->belongsTo(User::class,'agent_id');
    // }
    public function tourist(){
        return $this->belongsTo(User::class,'id');
    }
    public function vehical(){
        return $this->belongsTo(Vehical::class,'vehical_id');
    }
}
