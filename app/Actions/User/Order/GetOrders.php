<?php

namespace App\Actions\User\Order;

use App\Models\Order;
use Lorisleiva\Actions\Concerns\AsAction;

class GetOrders
{
  use AsAction;

  public function handle($id, $limit = 10, $paginate = false)
  {
    $orders = [];
    if ($paginate) {
      $orders = Order::where('user_id', $id)->paginate($limit);
    } else {
      $orders = Order::where('user_id', $id)->limit($limit)->get();
    }

    return $orders;
  }
}
