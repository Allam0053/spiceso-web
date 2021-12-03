<?php

namespace App\Actions\User\Trolley;

use App\Models\Trolley;
use App\Models\TrolleyProduct;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreTrolley
{
  use AsAction;

  public function handle($fill)
  {
    $trolley = Trolley::firstOrCreate([
      'user_id' => $fill['user_id'],
    ]);

    if (!$trolley) {
      return false;
    }

    $trolley_product = TrolleyProduct::where('trolley_id', $trolley->trolley_id)
      ->where('product_id', $fill['product_id'])
      ->update(['jumlah' => $fill['jumlah']]);

    if (!$trolley_product) {
      $trolley_product = TrolleyProduct::create([
        'product_id' => $fill['product_id'],
        'trolley_id' => $trolley->trolley_id,
        'jumlah' => $fill['jumlah'],
      ]);
    }

    if (!$trolley_product) {
      return false;
    }

    return $trolley_product;
  }
}
