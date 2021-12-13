<?php

namespace App\Actions\Admin\Product;

use App\Models\Product;
use App\Http\Requests\Admin\Product\StoreProductRequest;
use App\Models\Admin;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;
use App\Repositories\ProductRepository;
use Lorisleiva\Actions\Concerns\AsAction;
use Exception;

class StoreProduct
{
  use AsAction;

  private $productRepository;

  public function __construct(ProductRepository $productRepository)
  {
    $this->productRepository = $productRepository;
  }

  public function handle(StoreProductRequest $request)
  {
    DB::beginTransaction();

    try {
      $admin = Admin::findOrFail($request['admin_id']);

      if (!$admin) {
        DB::rollback();
        return false;
      }

      $data = $request->except([
        '_method',
        '_token',
        'gambars'
      ]);

      $product = $this->productRepository->create($data);

      if (!$product) {
        DB::rollback();
        return false;
      }

      $admin->products()->saveMany([$product]);

      $images = [];
      if ($request->hasFile('gambars')) {
        foreach ($request->file('gambars') as $image) {
          $name = $image->getClientOriginalName();
          $path = '/img/products/' . $product->product_id . "/";
          $image->move(public_path() . $path, $name);

          array_push(
            $images,
            ProductImage::create([
              'product_id' => $product->product_id,
              'nama' => $name,
              'link' => $path . $name,
            ])
          );
        }
      }

      $product->images()->saveMany($images);

      DB::commit();

      return true;
    } catch (Exception $exc) {
      DB::rollBack();

      throw $exc;
    }
  }
}
