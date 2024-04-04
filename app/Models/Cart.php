<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'product_id'
    ];
    static function create($product_id)
    {
        Cart::insert(['product_id' => $product_id]);
    }
    static function remove($cart_id)
    {
        Cart::where('id', $cart_id)->delete();
    }
}
