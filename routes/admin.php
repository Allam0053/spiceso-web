<?php

use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Order\OrderController;
use App\Http\Controllers\Admin\ProductDurability\ProductDurabilityController;
use App\Http\Controllers\Admin\User\UserController;
use Illuminate\Support\Facades\Route;

Route::name('admin.')->prefix('/admin')->middleware('auth:admin')->group(function () {
  Route::get('', [DashboardController::class, 'index'])->name('dashboard');

  Route::get('/daftar-pengguna', [UserController::class, 'index'])->name('users');
  Route::get('/detail-pengguna/{id}', [UserController::class, 'show'])->name('user');
  Route::delete('/daftar-pengguna/{id}/hapus', [UserController::class, 'destroy'])->name('users.delete');

  Route::get('/daftar-produk', [ProductController::class, 'index'])->name('products');
  Route::get('/daftar-produk/tambah', [ProductController::class, 'create'])->name('products.create');
  Route::post('/daftar-produk/tambah', [ProductController::class, 'store'])->name('products.store');

  Route::get('/detail-produk/{id}', [ProductController::class, 'show'])->name('product.show');
  Route::get('/detail-produk/{id}/ubah', [ProductController::class, 'edit'])->name('product.edit');
  Route::put('/detail-produk/{id}/perbarui', [ProductController::class, 'update'])->name('product.update');
  Route::delete('/detail-produk/{id}/hapus', [ProductController::class, 'destroy'])->name('product.delete');

  Route::get('/daftar-pesanan', [OrderController::class, 'index'])->name('orders');
  
  Route::get('/detail-pesanan/{id}', [OrderController::class, 'show'])->name('order.show');
  Route::get('/detail-pesanan/{id}/ubah', [OrderController::class, 'edit'])->name('order.edit');
  Route::put('/detail-pesanan/{id}/perbarui', [OrderController::class, 'update'])->name('order.update');
  Route::delete('/detail-pesanan/{id}/hapus', [OrderController::class, 'destroy'])->name('order.delete');

  Route::get('/daftar-ketahanan', [ProductDurabilityController::class, 'index'])->name('durabilities');
  Route::post('/daftar-ketahanan/tambah', [ProductDurabilityController::class, 'store'])->name('durabilities.store');
  Route::delete('/daftar-ketahanan/{id}/hapus', [ProductDurabilityController::class, 'destroy'])->name('durabilities.delete');
});
