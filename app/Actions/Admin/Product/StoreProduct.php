<?php

namespace App\Actions\Admin\Product;

use App\Models\Product;
use App\Http\Requests\Admin\Product\StoreProductRequest;
use App\Models\Admin;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;
use Exception;

class StoreProduct
{
  use AsAction;

  public function handle(StoreProductRequest $request)
  {
    DB::beginTransaction();

    try {
      $admin = Admin::findOrFail($request['admin_id']);

      if (!$admin) {
        DB::rollback();
        return false;
      }

      $product = Product::create($request->except([
        '_method',
        '_token',
        'gambars'
      ]));

      if (!$product) {
        DB::rollback();
        return false;
      }

      $admin->products()->saveMany([$product]);

      $images = [];
      if ($request->hasfile('gambars')) {
        foreach ($request->file('gambars') as $image) {
          if ($image) {
            $name = $image->getClientOriginalName();
            $path = public_path() . '/img/products/' . $product->product_id;
            $image->move($path . '/', $name);

            array_push(
              $images,
              ProductImage::create([
                'product_id' => $product->product_id,
                'nama' => $name,
                'link' => $path,
              ])
            );
          }
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
