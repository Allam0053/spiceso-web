<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('layouts/home');
});


Route::get('/daftar', function () {
    return view('layouts/register');
});

Route::get('/masuk', function () {
    return view('layouts/login');
});

Route::get('/detail', function () {
    return view('layouts/detail-product');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
