<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductController::class, 'index'])->name('root');

Route::post('/insert', [CartController::class, 'store'])->name('insert.store');

Route::post('/delete', [CartController::class, 'delete'])->name('delete.store');

Route::get('/products/detail', function () {
    return view('detail');
})->name('product.cart');
