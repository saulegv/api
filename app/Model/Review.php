<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //lacion de review con product
    public function product(){

        return $this->belongsTo(Product::class);
    }
}
