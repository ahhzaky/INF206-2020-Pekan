<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function() {
    return view('mitra.login');
});

Route::get('/register', function() {
    return view('mitra.register');
});

Route::get('/opsiPasar', function() {
    return view('mitra.opsiPasar');
});

Route::get('/profile', function() {
    return view('mitra.profil');
});

Route::get('/order', function() {
    return view('mitra.order');
});

Route::get('/stock', function() {
    return view('mitra.stok');
});

Route::get('/history', function() {
    return view('history');
});