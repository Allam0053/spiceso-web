<?php

namespace App\Actions\Admin\Product;

use App\Models\Product;
use App\Repositories\ProductRepository;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteProduct
{
  use AsAction;

  private $productRepository;

  public function __construct(ProductRepository $productRepository)
  {
    $this->productRepository = $productRepository;
  }

  public function handle($id)
  {
    // $product = Product::findOrFail($id)->delete();
    $product = $this->productRepository->delete($id);

    return $product;
  }
}
