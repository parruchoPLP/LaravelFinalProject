<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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