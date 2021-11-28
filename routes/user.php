<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Dashboard\DashboardController;

Route::name('user.')->middleware('auth:user')->group(function () {
  Route::get('/', [DashboardController::class, 'home'])->name('home');
});
