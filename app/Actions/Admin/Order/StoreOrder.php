<?php

namespace App\Actions\Admin\Order;

use App\Models\Order;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreOrder
{
  use AsAction;

  public function handle($fill)
  {
    $order = Order::create($fill);

    return $order;
  }
}
