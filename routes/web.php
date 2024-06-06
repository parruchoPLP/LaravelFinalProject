<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;

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

Route::get('/checkout', function () {
    return view('checkout');
});


Route::get('/', [ProductController::class, 'homepage'])->name('homepage');
Route::get('/homepage', [ProductController::class, 'homepage'])->name('homepage');
Route::get('/storepage', [ProductController::class, 'storepage'])->name('storepage');
Route::get('/delivery-and-shipping', [ProductController::class, 'deliveryandshipping'])->name('deliveryandshipping');
Route::get('/payment', [Controller::class, 'showPayment']);
Route::get('/aboutus', [ProductController::class, 'aboutus'])->name('aboutus');
Route::get('/storepage/{id}', [ProductController::class, 'storesearch'])->name('storepage');
Route::get('/product/{productID}', [ProductController::class,'showProduct'])->name('product.show');
Route::get('/login', [ProductController::class, 'login'])->name('login');
Route::get('/signup', [ProductController::class, 'signup'])->name('signup');
Route::get('/profile', [ProductController::class, 'profile'])->name('profile');

Route::post('/store', [UserController::class,'store'])->name('');
Route::post('/authenticate', [UserController::class,'authenticate'])->name('');
Route::post('/logout', [UserController::class,'logout'])->name('');

Route::middleware(['auth'])->group(function () {
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.addToCart');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('/cart/items', [CartController::class, 'getCart'])->name('cart.getCart');
    Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.removeFromCart');
});