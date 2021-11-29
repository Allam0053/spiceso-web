<?php

use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\User\UserController;
use Illuminate\Support\Facades\Route;

Route::name('admin.')->prefix('/admin')->middleware('auth:admin')->group(function () {
  Route::get('', [DashboardController::class, 'index'])->name('dashboard');

  Route::get('/daftar-pengguna', [UserController::class, 'index'])->name('users');
  Route::delete('/daftar-pengguna/{id}', [UserController::class, 'destroy'])->name('users.delete');
  Route::get('/detail-pengguna/{id}', [UserController::class, 'show'])->name('user');

  Route::get('/daftar-produk', [ProductController::class, 'index'])->name('products');
  Route::get('/daftar-produk/tambah', [ProductController::class, 'create'])->name('products.create');
  Route::post('/daftar-produk/tambah', [ProductController::class, 'store'])->name('products.store');

  Route::get('/detail-produk/{id}', [ProductController::class, 'show'])->name('product');
  Route::get('/detail-produk/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
  Route::put('/detail-produk/{id}/update', [ProductController::class, 'update'])->name('product.update');
  Route::delete('/detail-produk/{id}', [ProductController::class, 'destroy'])->name('product.delete');

  Route::get('/pesanan', [ProductController::class, 'index'])->name('orders');
  Route::delete('/pesanan/{id}', [ProductController::class, 'destroy'])->name('orders.delete');

  Route::get('/pesanan/{id}', [ProductController::class, 'show'])->name('order');
  Route::get('/pesanan/{id}/edit', [ProductController::class, 'edit'])->name('order.edit');
  Route::put('/pesanan/{id}', [ProductController::class, 'update'])->name('order.update');
});
