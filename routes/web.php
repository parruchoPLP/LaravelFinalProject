<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;


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

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/storepage', function () {
    return view('storepage');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/delivery-and-shipping', [Controller::class, 'showDeliveryAndShipping']);
Route::get('/payment', [Controller::class, 'showPayment']);
Route::get('/aboutus', [Controller::class, 'showAboutus']);
