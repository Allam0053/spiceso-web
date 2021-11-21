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

Route::get('/list', function () {
    return view('layouts/list-product');
});

Route::view('/', 'dashboard')->name('dashboard');

require __DIR__.'/auth.php';

require __DIR__.'/user.php';

require __DIR__.'/admin.php';
