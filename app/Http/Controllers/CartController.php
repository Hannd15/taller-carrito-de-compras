<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    function index(){
        $products = Product::where('state', 1)->get();
        return view('welcome', ['products' => $products]);
    }
}
