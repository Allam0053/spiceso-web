<?php

namespace App\Actions\Admin\PaymentMethod;

use App\Models\PaymentMethod;
use Lorisleiva\Actions\Concerns\AsAction;

class StorePaymentMethod
{
  use AsAction;

  public function handle($fill)
  {
    $payment_method = PaymentMethod::create($fill);

    return $payment_method;
  }
}
