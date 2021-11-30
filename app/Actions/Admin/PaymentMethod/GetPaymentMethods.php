<?php

namespace App\Actions\Admin\PaymentMethod;

use App\Models\PaymentMethod;
use Lorisleiva\Actions\Concerns\AsAction;

class GetPaymentMethods
{
  use AsAction;

  public function handle($limit = 10, $paginate = false)
  {
    $product_durabilitys = [];
    if ($paginate) {
      $product_durabilitys = PaymentMethod::paginate($limit);
    } else {
      $product_durabilitys = PaymentMethod::limit($limit)->get();
    }

    return $product_durabilitys;
  }
}
