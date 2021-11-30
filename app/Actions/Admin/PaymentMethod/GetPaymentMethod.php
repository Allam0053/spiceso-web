<?php

namespace App\Actions\Admin\PaymentMethod;

use App\Models\PaymentMethod;
use Lorisleiva\Actions\Concerns\AsAction;

class GetPaymentMethod
{
  use AsAction;

  public function handle($id)
  {
    $payment_method = PaymentMethod::findOrFail($id);

    return $payment_method;
  }
}
