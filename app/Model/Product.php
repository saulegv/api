<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Review;

class Product extends Model
{
protected $fillable = [

    'name', 'detail', 'stock', 'price', 'discount'
];

    //relacion con reviews
    public function reviews(){

        return $this->hasMany(Review::class);   
    }
}
