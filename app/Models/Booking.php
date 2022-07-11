<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'tourist_id',
        'tourist_name',
        'country',
        'email',
        'hotel',
        'checkin',
        'checkout',
        'comfort',
        'adults',
        'childrens',
        'rooms',
        'message',
        'price',

    ];
    public function tourist(){
        return $this->belongsTo(Tourist::class,'tourist_id');
    }
}
