<?php

namespace App\Actions\Admin\Product;

use App\Models\Product;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreProduct
{
  use AsAction;

  public function handle($fill)
  {
    $product = Product::create($fill);

    return $product;
  }
}
