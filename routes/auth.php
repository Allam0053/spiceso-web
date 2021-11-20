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

  Route::post('/keluar', [AuthenticateUserController::class, 'destroy'])->middleware('auth')->name('logout');
});

Route::name('admin.')->prefix('/admin')->group(function () {
  Route::middleware('guest:user')->group(function () {
    Route::get('/daftar', [RegisterAdminController::class, 'create'])->name('register');
    Route::post('/daftar', [RegisterAdminController::class, 'store'])->name('register.store');

    Route::get('/masuk', [AuthenticateAdminController::class, 'create'])->name('login');
    Route::post('/masuk', [AuthenticateAdminController::class, 'store'])->name('login.store');
  });

  Route::post('/keluar', [AuthenticateAdminController::class, 'destroy'])->middleware('auth')->name('logout');
});

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
  ->middleware('guest')
  ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
  ->middleware('guest')
  ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
  ->middleware('guest')
  ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
  ->middleware('guest')
  ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
  ->middleware('auth')
  ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
  ->middleware(['auth', 'signed', 'throttle:6,1'])
  ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
  ->middleware(['auth', 'throttle:6,1'])
  ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
  ->middleware('auth')
  ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
  ->middleware('auth');
