<?php

namespace App\Providers;

use App\Repositories\EloquentProductRepository;
use App\Repositories\ProductRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
  public function register()
  {
    $this->app->bind(ProductRepository::class, EloquentProductRepository::class);
  }

  public function boot()
  {
    Schema::defaultstringLength(255);
  }
}
