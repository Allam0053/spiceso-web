<?php

namespace App\Actions\Common\Order;

use App\Models\Order;
use Lorisleiva\Actions\Concerns\AsAction;

class GetOrder
{
  use AsAction;

  public function handle($id)
  {
    $order = Order::findOrFail($id);

    return $order;
  }
}
