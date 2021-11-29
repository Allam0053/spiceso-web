<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'layouts.dashboard')->name('dashboard');

Route::prefix('/admin')->group(function () {
    Route::view('/buttons', 'layouts.admin.buttons');
    Route::view('/cards', 'layouts.admin.cards');
    Route::view('/charts', 'layouts.admin.charts');
    Route::view('/forms', 'layouts.admin.forms');
    Route::view('/modals', 'layouts.admin.modals');
    Route::view('/tables', 'layouts.admin.tables');
});

Route::prefix('/user')->group(function () {
    Route::view('/checkout', 'layouts.user.trolley.index');
    Route::view('/payment', 'layouts.user.payment.index');
    Route::view('/review-p', 'layouts.user.review-p.index');
    Route::view('/refund', 'layouts.user.refund.index');
    Route::view('/order', 'layouts.user.order.index');
    Route::view('/order/detail', 'layouts.user.order.detail');
    Route::view('/profile', 'layouts.user.profile.index');
    Route::view('/profile/edit', 'layouts.user.profile.edit');
    Route::view('/profile/edit-password', 'layouts.user.profile.edit-password');
});

require __DIR__.'/auth.php';

require __DIR__.'/user.php';

require __DIR__.'/admin.php';
