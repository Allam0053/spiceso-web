<?php

namespace App\Actions\Admin\ProductCategory;

use App\Models\ProductCategory;
use Lorisleiva\Actions\Concerns\AsAction;

class GetProductCategories
{
  use AsAction;

  public function handle($limit = 10, $paginate = false)
  {
    $product_durabilitys = [];
    if ($paginate) {
      $product_durabilitys = ProductCategory::paginate($limit);
    } else {
      $product_durabilitys = ProductCategory::limit($limit)->get();
    }

    return $product_durabilitys;
  }
}
