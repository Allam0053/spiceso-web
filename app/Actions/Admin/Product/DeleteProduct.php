<?php

namespace App\Actions\Admin\Product;

use App\Models\Product;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteProduct
{
  use AsAction;

  public function handle($id)
  {
    $product = Product::findOrFail($id)->delete();

    return $product;
  }
}
