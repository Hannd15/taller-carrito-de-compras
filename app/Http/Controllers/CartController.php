<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function store(Request $request)
    {
    Cart::create($request->input('product_id'));

        return redirect()->back()->with('success', 'Data inserted successfully.');
    }
    public function delete(Request $request)
    {

        return redirect()->back()->with('success', 'Data inserted successfully.');
    }


}
