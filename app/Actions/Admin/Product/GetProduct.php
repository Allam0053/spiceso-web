<?php

namespace App\Actions\Admin\Product;

use App\Models\Product;
use App\Repositories\ProductRepository;
use Lorisleiva\Actions\Concerns\AsAction;

class GetProduct
{
  use AsAction;

  private $productRepository;

  public function __construct(ProductRepository $productRepository)
  {
    $this->productRepository = $productRepository;
  }

  public function handle($id)
  {
    // $product = Product::findOrFail($id);
    $product = $this->productRepository->find($id);

    return $product;
  }
}
