<?php

namespace App\Actions\Admin\PaymentMethod;

use App\Models\PaymentMethod;
use Lorisleiva\Actions\Concerns\AsAction;

class StorePaymentMethod
{
  use AsAction;

  public function handle($fill)
  {
    $product_durability = PaymentMethod::create($fill);

    return $product_durability;
  }
}
