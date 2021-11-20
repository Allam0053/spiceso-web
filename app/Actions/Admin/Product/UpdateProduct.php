<?php

namespace App\Actions\Admin\Product;

use App\Models\Product;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateProduct
{
  use AsAction;

  public function handle($fill, $id)
  {
    $product = Product::findOrFail($id)->update($fill);

    return $product;
  }
}
