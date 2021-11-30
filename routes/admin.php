<?php

use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\DeliverMethod\DeliverMethodController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Order\OrderController;
use App\Http\Controllers\Admin\PaymentMethod\PaymentMethodController;
use App\Http\Controllers\Admin\ProductCategory\ProductCategoryController;
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

  Route::get('/daftar-pengiriman', [DeliverMethodController::class, 'index'])->name('delivers');
  Route::post('/daftar-pengiriman/tambah', [DeliverMethodController::class, 'store'])->name('delivers.store');
  Route::delete('/daftar-pengiriman/{id}/hapus', [DeliverMethodController::class, 'destroy'])->name('delivers.delete');

  Route::get('/daftar-kategori', [ProductCategoryController::class, 'index'])->name('categories');
  Route::post('/daftar-kategori/tambah', [ProductCategoryController::class, 'store'])->name('categories.store');
  Route::delete('/daftar-kategori/{id}/hapus', [ProductCategoryController::class, 'destroy'])->name('categories.delete');

  Route::get('/daftar-pembayaran', [PaymentMethodController::class, 'index'])->name('payments');
  Route::post('/daftar-pembayaran/tambah', [PaymentMethodController::class, 'store'])->name('payments.store');
  Route::delete('/daftar-pembayaran/{id}/hapus', [PaymentMethodController::class, 'destroy'])->name('payments.delete');
});
