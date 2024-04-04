<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function store(Request $request)
    {
Cart::create([
            'product_id' => $request->input('product_id')
        ]);
        return redirect()->back()->with('success', 'Data inserted successfully.');
    }
    public function delete(Request $request)
    {

        return redirect()->back()->with('success', 'Data removed successfully.');
    }
    public function index(){
        $cartItems = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->select('carts.*', 'products.*')
            ->get();
        return view('detail', ['cartItems' => $cartItems]);
    }

}
