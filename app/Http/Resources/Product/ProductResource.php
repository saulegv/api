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
            'Stock' => $this->stock == 0 ? 'Out of Stock' : $this->stock,
            'Discount' => $this->discount,
            'TotalPrice' => round((1- ($this->discount/100)) * $this->price,2),
            'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(),2) : 'No rating yet',
            'href' => [

                'reviews' => route('reviews.index', $this->id)
            ]
        ];

    }
}
