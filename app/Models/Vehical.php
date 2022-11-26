<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehical extends Model
{
    use HasFactory;
    protected $fillable = [
    'user_id',
    'vehical_model',
    'driver_name',
    'driver_lno',
    'vehical_no',
    'city',
    'type',
    'thumbnail',
];
}
