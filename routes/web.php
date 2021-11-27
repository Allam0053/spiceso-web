<?php

use Illuminate\Support\Facades\Route;

Route::view('', 'layouts.dashboard')->name('dashboard');

Route::get('/produk', function () {
    return view('layouts/user/list-product');
});

Route::get('/produk/{id}', function () {
    return view('layouts/user/detail-product');
});

Route::prefix('/admin')->group(function () {
    Route::view('/buttons', 'layouts.admin.buttons');
    Route::view('/cards', 'layouts.admin.cards');
    Route::view('/charts', 'layouts.admin.charts');
    Route::view('/forms', 'layouts.admin.forms');
    Route::view('/modals', 'layouts.admin.modals');
    Route::view('/tables', 'layouts.admin.tables');
});

require __DIR__.'/auth.php';

require __DIR__.'/user.php';

require __DIR__.'/admin.php';
