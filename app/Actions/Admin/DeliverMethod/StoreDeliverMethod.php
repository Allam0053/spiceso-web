<?php

namespace App\Actions\Admin\DeliverMethod;

use App\Models\DeliverMethod;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreDeliverMethod
{
  use AsAction;

  public function handle($fill)
  {
    $deliver_method = DeliverMethod::create($fill);

    return $deliver_method;
  }
}
