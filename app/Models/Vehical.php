<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehical extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'user_id',
        'model',
        'driver_name',
        'contact',
        'licence_no',
        'vehical_no',
        'type',
        'city',
         'thumbnail'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
