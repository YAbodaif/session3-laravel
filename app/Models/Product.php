<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use APP\Models\Category;
class Product extends Model
{
    use HasFactory;
    protected $fillable=[
         'title','description','price','category','img'
    ];

    public function Categories(){
        return $this->belongsToMany('App\Models\Category');
    }
}
