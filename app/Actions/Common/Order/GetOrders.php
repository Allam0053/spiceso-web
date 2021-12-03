<?php

namespace App\Actions\Common\Order;

use App\Models\Order;
use Lorisleiva\Actions\Concerns\AsAction;

class GetOrders
{
  use AsAction;

  public function handle($limit = 10, $paginate = false)
  {
    $orders = [];
    if ($paginate) {
      $orders = Order::paginate($limit);
    } else {
      $orders = Order::limit($limit)->get();
    }

    return $orders;
  }
}
