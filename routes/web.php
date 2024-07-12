<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 // pages routes
 Route::get('/', [PagesController::class, 'index']);

 Route::get('/about', [PagesController::class, 'about']);
 Route::get('/gallery', [PagesController::class, 'blog']);
 Route::get('/contact', [PagesController::class, 'contact']);
 Route::get('/services', [PagesController::class, 'services']);

 Route::get('/shop', [ShopController::class, 'shop'])->name('shop');
 Route::get('/shop/{product}', [ShopController::class, 'show'])->name('shop.show');

 

 //Cart Routes
 Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
 Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
 Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
 //Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
 Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');

//Checkout routes
 Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
