<?php

namespace App\Actions\Admin\ProductCategory;

use App\Models\ProductCategory;
use Lorisleiva\Actions\Concerns\AsAction;

class GetProductCategory
{
  use AsAction;

  public function handle($id)
  {
    $product_category = ProductCategory::findOrFail($id);

    return $product_category;
  }
}
