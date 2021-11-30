<?php

namespace App\Actions\Admin\ProductDurability;

use App\Models\ProductDurability;
use Lorisleiva\Actions\Concerns\AsAction;

class GetProductDurability
{
  use AsAction;

  public function handle($id)
  {
    $product_durability = ProductDurability::findOrFail($id);

    return $product_durability;
  }
}
