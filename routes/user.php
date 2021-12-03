<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Dashboard\DashboardController;
use App\Http\Controllers\User\Product\ProductController;
use App\Http\Controllers\User\User\UserController;
use App\Http\Controllers\User\Trolley\TrolleyController;

Route::name('user.')->prefix('/user')->middleware('auth:user')->group(function () {
  Route::get('/', [ProductController::class, 'index'])->name('home');
  Route::get('/produk', [ProductController::class, 'index'])->name('product.detail');
  
  Route::name('profil.')->prefix('/profil')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('show');
    Route::get('/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/update', [UserController::class, 'update'])->name('update');
  });
  
  Route::get('/keranjang', [TrolleyController::class, 'index'])->name('trolley');
  Route::get('/keranjang/tambah', [TrolleyController::class, 'store'])->name('trolley.store');
});
