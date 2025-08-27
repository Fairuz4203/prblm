<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =[
    'category_title',
    'slug',
    'icon',
    'status'
];
   function scopeActive($q){
    $q->where('status',1);
   }
   
  function products (){
        return $this->hasMany(Product::class);
    }
}
