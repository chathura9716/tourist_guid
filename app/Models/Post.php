<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'tourist_id',
        'user_id',
        'title',
        'description',
        'thumbnail'
    ];
    public function tourist(){
        return $this->belongsTo(Tourist::class,'tourist_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
   
}
