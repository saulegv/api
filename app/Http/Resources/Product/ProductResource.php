<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'Name' => $this->name,
            'Description' => $this->detail,
            'Price' => $this->price,
            'Stock' => $this->stock,
            'Discount' => $this->discount,
            
        ];

    }
}
