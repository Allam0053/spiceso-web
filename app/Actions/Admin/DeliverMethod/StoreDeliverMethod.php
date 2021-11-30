<?php

namespace App\Actions\Admin\DeliverMethod;

use App\Models\DeliverMethod;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreDeliverMethod
{
  use AsAction;

  public function handle($fill)
  {
    $product_durability = DeliverMethod::create($fill);

    return $product_durability;
  }
}
