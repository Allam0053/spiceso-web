<?php

namespace App\Actions\Admin\DeliverMethod;

use App\Models\DeliverMethod;
use Lorisleiva\Actions\Concerns\AsAction;

class GetDeliverMethod
{
  use AsAction;

  public function handle($id)
  {
    $deliver_method = DeliverMethod::findOrFail($id);

    return $deliver_method;
  }
}
