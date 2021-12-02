<?php

namespace App\Actions\Admin\Product;

use App\Models\Product;
use App\Http\Requests\Admin\Product\StoreProductRequest;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;
use Exception;

class UpdateProduct
{
  use AsAction;

  public function handle(StoreProductRequest $request, $id)
  {
    DB::beginTransaction();

    try {
      $product = Product::findOrFail($id);

      $result = $product->update($request->except([
        '_method',
        '_token',
        'gambars'
      ]));

      if (!$result) {
        DB::rollback();
        return false;
      }

      $images = [];
      foreach ($request->file('gambars') as $image) {
        $name = $image->getClientOriginalName();
        $path = '/img/products/' . $id . "/";
        $image->move(public_path() . $path, $name);

        array_push(
          $images,
          ProductImage::create([
            'product_id' => $id,
            'nama' => $name,
            'link' => $path . $name,
          ])
        );
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
