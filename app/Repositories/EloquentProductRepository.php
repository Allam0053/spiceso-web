<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class EloquentProductRepository implements ProductRepository
{
  protected $model;

  public function __construct(Product $product)
  {
    $this->model = $product;
  }

  public function all($limit = 10, $paginate = false)
  {
    $products = [];

    if ($paginate) {
      $products = $this->model->paginate($limit);
    } else {
      $products = $this->model->limit($limit)->get();
    }

    return $products;
  }

  public function create(array $data)
  {
    $product = $this->model->create($data);

    return $product;
  }

  public function update(array $data, $id)
  {
    $product = Product::findOrFail($id);

    $product->update($data);

    return $product;
  }

  public function delete($id)
  {
    return $this->model->destroy($id);
  }

  public function find($id)
  {
    if (null == $user = $this->model->find($id)) {
      throw new ModelNotFoundException("Product not found");
    }

    return $user;
  }
}
