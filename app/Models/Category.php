<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use APP\Models\Product;
class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        'name'
   ];

   public function products(){
        return $this->belongsToMany('App\Models\Product');
   }
}
