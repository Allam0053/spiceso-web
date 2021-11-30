<?php

namespace App\Actions\Admin\PaymentMethod;

use App\Models\PaymentMethod;
use Lorisleiva\Actions\Concerns\AsAction;

class GetPaymentMethods
{
  use AsAction;

  public function handle($limit = 10, $paginate = false)
  {
    $payment_methods = [];
    if ($paginate) {
      $payment_methods = PaymentMethod::paginate($limit);
    } else {
      $payment_methods = PaymentMethod::limit($limit)->get();
    }

    return $payment_methods;
  }
}
