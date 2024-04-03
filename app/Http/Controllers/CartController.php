<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function store(Request $request)
    {
        Cart::create([
            'product_id' => $request->input('product_id')
        ]);
        Cart::delete([
            
        ]);

        return redirect()->back()->with('success', 'Data inserted successfully.');
    }

}
