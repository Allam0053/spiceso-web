<?php

use App\Http\Controllers\Auth\AuthenticateUserController;
use App\Http\Controllers\Auth\AuthenticateAdminController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\RegisterAdminController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::name('user.')->group(function () {
  Route::middleware('guest:user')->group(function () {
    Route::get('/daftar', [RegisterUserController::class, 'create'])->name('register');
    Route::post('/daftar', [RegisterUserController::class, 'store'])->name('register.store');

    Route::get('/masuk', [AuthenticateUserController::class, 'create'])->name('login');
    Route::post('/masuk', [AuthenticateUserController::class, 'store'])->name('login.store');
  });

  Route::post('/keluar', [AuthenticateUserController::class, 'destroy'])->middleware('auth:user')->name('logout');
});

Route::name('admin.')->prefix('/admin')->group(function () {
  Route::middleware('guest:user')->group(function () {
    Route::get('/daftar', [RegisterAdminController::class, 'create'])->name('register');
    Route::post('/daftar', [RegisterAdminController::class, 'store'])->name('register.store');

    Route::get('/masuk', [AuthenticateAdminController::class, 'create'])->name('login');
    Route::post('/masuk', [AuthenticateAdminController::class, 'store'])->name('login.store');
  });

  Route::post('/keluar', [AuthenticateAdminController::class, 'destroy'])->middleware('auth:admin')->name('logout');
});
