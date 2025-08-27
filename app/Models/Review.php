<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable =[
        "product_id",
        "user_id",
        'user_name',
        "rating",
        "message",
    ];

    function user(){
        return $this->belongsTo(User::class);
    }
}
