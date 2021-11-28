<?php

use Illuminate\Support\Facades\Route;

Route::view('', 'layouts.dashboard')->name('dashboard');

Route::get('/produk', function () {
    return view('layouts/user/product/index');
});

Route::get('/produk/{id}', function () {
    return view('layouts/user/product/detail');
});

Route::prefix('/admin')->group(function () {
    Route::view('/buttons', 'layouts.admin.buttons');
    Route::view('/cards', 'layouts.admin.cards');
    Route::view('/charts', 'layouts.admin.charts');
    Route::view('/forms', 'layouts.admin.forms');
    Route::view('/modals', 'layouts.admin.modals');
    Route::view('/tables', 'layouts.admin.tables');
});

Route::prefix('/user')->group(function () {
    Route::view('/home', 'layouts.user.home');
    Route::view('/checkout', 'layouts.user.trolley.index');
    Route::view('/order', 'layouts.user.order.index');
});

require __DIR__.'/auth.php';

require __DIR__.'/user.php';

require __DIR__.'/admin.php';
