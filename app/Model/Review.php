<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\product;

class Review extends Model
{
    //lacion de review con product
    public function product(){ 

        return $this->belongsTo(Product::class);    
    }
}
