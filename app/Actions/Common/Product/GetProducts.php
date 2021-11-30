<?php

namespace App\Actions\Common\Product;

use App\Models\Product;
use Lorisleiva\Actions\Concerns\AsAction;

class GetProducts
{
  use AsAction;

  public function handle($limit = 10, $paginate = false)
  {
    $products = [];
    if ($paginate) {
      $products = Product::paginate($limit);
    } else {
      $products = Product::limit($limit)->get();
    }

    return $products;
  }
}
