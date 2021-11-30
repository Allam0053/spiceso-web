<?php

namespace App\Actions\Admin\ProductDurability;

use App\Models\ProductDurability;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreProductDurability
{
  use AsAction;

  public function handle($fill)
  {
    $product_durability = ProductDurability::create($fill);

    return $product_durability;
  }
}
