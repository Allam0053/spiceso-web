<?php

namespace App\Actions\Admin\ProductDurability;

use App\Models\ProductDurability;
use Lorisleiva\Actions\Concerns\AsAction;

class GetProductDurabilities
{
  use AsAction;

  public function handle($limit = 10, $paginate = false)
  {
    $product_durabilitys = [];
    if ($paginate) {
      $product_durabilitys = ProductDurability::paginate($limit);
    } else {
      $product_durabilitys = ProductDurability::limit($limit)->get();
    }

    return $product_durabilitys;
  }
}
