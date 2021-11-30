<?php

namespace App\Actions\Admin\PaymentMethod;

use App\Models\PaymentMethod;
use Lorisleiva\Actions\Concerns\AsAction;

class GetPaymentMethod
{
  use AsAction;

  public function handle($id)
  {
    $product_durability = PaymentMethod::findOrFail($id);

    return $product_durability;
  }
}
