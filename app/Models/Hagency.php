<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hagency extends Model
{
    use HasFactory;
    protected $fillable = [

        'user_id',
        'reg_no',
        'agency_name',
        
        'contact',
        'location',
       
       
        
    ];

}
