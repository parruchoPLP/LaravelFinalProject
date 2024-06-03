<?php

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

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/signup', function () {
    return view('loginandsignup');
});

Route::get('/login', function () {
    return view('loginandsignup');
});

Route::get('/profile', function () {
    return view('profile');
});
