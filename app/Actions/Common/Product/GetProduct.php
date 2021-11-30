<?php

namespace App\Actions\Common\Product;

use App\Models\Product;
use Lorisleiva\Actions\Concerns\AsAction;

class GetProduct
{
  use AsAction;

  public function handle($id)
  {
    $product = Product::findOrFail($id);

    return $product;
  }
}
