<?php

namespace App\Actions\Admin\PaymentMethod;

use App\Models\PaymentMethod;
use Lorisleiva\Actions\Concerns\AsAction;

class DeletePaymentMethod
{
  use AsAction;

  public function handle($id)
  {
    $product_durability = PaymentMethod::findOrFail($id)->delete();

    return $product_durability;
  }
}
