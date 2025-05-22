<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/produk', 'produk');
Route::view('/artikel', 'artikel');
Route::view('/kontak', 'kontak');
Route::view('/tentang', 'tentang');
Route::view('/chart', 'chart');
Route::view('/profil', 'profil');