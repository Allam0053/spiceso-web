<?php

use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\User\UserController;
use Illuminate\Support\Facades\Route;

Route::name('admin.')->prefix('/admin')->middleware('auth:admin')->group(function () {
  Route::get('/daftar-pengguna', [UserController::class, 'index'])->name('user-list');
  Route::delete('/daftar-pengguna/{id}', [UserController::class, 'destroy'])->name('user-list.delete');

  Route::get('/detail-pengguna/{id}', [UserController::class, 'show'])->name('user-detail');

  Route::get('/daftar-produk', [ProductController::class, 'index'])->name('product-list');
  Route::put('/daftar-produk/{id}', [ProductController::class, 'store'])->name('product-list.store');
  Route::delete('/daftar-produk/{id}', [ProductController::class, 'destroy'])->name('product-list.delete');

  Route::get('/detail-produk/{id}', [ProductController::class, 'show'])->name('product-detail');
  Route::get('/detail-produk/{id}/edit', [ProductController::class, 'edit'])->name('product-detail.edit');
  Route::put('/detail-produk/{id}', [ProductController::class, 'update'])->name('product-detail.update');
});
