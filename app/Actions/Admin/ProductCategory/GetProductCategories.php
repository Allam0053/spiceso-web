<?php

namespace App\Actions\Admin\ProductCategory;

use App\Models\ProductCategory;
use Lorisleiva\Actions\Concerns\AsAction;

class GetProductCategories
{
  use AsAction;

  public function handle($limit = 10, $paginate = false)
  {
    $product_categorys = [];
    if ($paginate) {
      $product_categorys = ProductCategory::paginate($limit);
    } else {
      $product_categorys = ProductCategory::limit($limit)->get();
    }

    return $product_categorys;
  }
}
