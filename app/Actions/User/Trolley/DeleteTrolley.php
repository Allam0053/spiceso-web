<?php

namespace App\Actions\User\Trolley;

use App\Models\Trolley;
use App\Models\TrolleyProduct;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteTrolley
{
  use AsAction;

  public function handle($id, $from)
  {
    $trolley_product = TrolleyProduct::where('trolley_id', $from)
    ->where('product_id', $id)
    ->delete();

    return $trolley_product;
  }
}
