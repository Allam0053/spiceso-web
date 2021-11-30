<?php

namespace App\Actions\Admin\DeliverMethod;

use App\Models\DeliverMethod;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteDeliverMethod
{
  use AsAction;

  public function handle($id)
  {
    $deliver_method = DeliverMethod::findOrFail($id)->delete();

    return $deliver_method;
  }
}
