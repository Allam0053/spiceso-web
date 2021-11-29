<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Dashboard\DashboardController;

Route::name('user.')->prefix('/user')->middleware('auth:user')->group(function () {
  Route::get('/', [DashboardController::class, 'index'])->name('home');
});
