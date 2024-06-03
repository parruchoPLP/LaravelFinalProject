<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

Route::get('/storepage', function () {
    return view('storepage');
});
Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/homepage', [ProductController::class, 'homepage'])->name('homepage');
Route::get('/storepage', [ProductController::class, 'storepage'])->name('storepage');
Route::get('/delivery-and-shipping', [Controller::class, 'showDeliveryAndShipping']);
Route::get('/payment', [Controller::class, 'showPayment']);
Route::get('/aboutus', [Controller::class, 'showAboutus']);
Route::get('/storepage/{id}', [ProductController::class, 'storesearch'])->name('storepage');
Route::get('/product/{productID}', [ProductController::class,'showProduct'])->name('product.show');