<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cart extends Model
{
    protected $fillable = [
        'product_id'
    ];
    static function create($product_id) {
        DB::table('carts')->insert(['product_id' => $product_id]);
    }
}
