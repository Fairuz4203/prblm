<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Optional: if you want to allow mass assignment
    protected $fillable = [
        'name',
        'email',
        'phone',
        'amount',
        'status',
        'address',
        'transaction_id',
        'currency'
    ];
}
