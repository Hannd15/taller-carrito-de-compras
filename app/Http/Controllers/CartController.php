<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function store(Request $request)
    {
        Cart::create([ // Parece que este es un metodo nativo por lo que no era necesario declararlo en el modelo
            'product_id' => $request->input('product_id')
        ]);
        return redirect()->back()->with('success', 'Data inserted successfully.');
    }

    public function delete(Request $request)
    {
        Cart::remove($request->input('cart_id'));
        return redirect()->back()->with('success', 'Data removed successfully.');
    }

    public function index()
    {
        $cartItems = Cart::join('products as p', 'carts.product_id', '=', 'p.id')
            ->select('carts.id as id', 'p.name', 'p.description', 'p.price', 'p.url_image', 'p.state')
            ->get();
        return view('detail', ['cartItems' => $cartItems]);
    }
}
