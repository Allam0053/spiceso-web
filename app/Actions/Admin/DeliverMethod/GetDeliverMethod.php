<?php

namespace App\Actions\Admin\DeliverMethod;

use App\Models\DeliverMethod;
use Lorisleiva\Actions\Concerns\AsAction;

class GetDeliverMethod
{
  use AsAction;

  public function handle($id)
  {
    $product_durability = DeliverMethod::findOrFail($id);

    return $product_durability;
  }
}
