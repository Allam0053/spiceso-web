<?php

namespace App\Actions\Admin\Product;

use App\Models\Product;
use App\Repositories\ProductRepository;
use Lorisleiva\Actions\Concerns\AsAction;

class GetProducts
{
  use AsAction;

  private $productRepository;

  public function __construct(ProductRepository $productRepository)
  {
    $this->productRepository = $productRepository;
  }

  public function handle($limit = 10, $paginate = false)
  {
    $products = $this->productRepository->all($limit, $paginate);

    return $products;
  }
}
