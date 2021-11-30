<?php

namespace App\Actions\Admin\DeliverMethod;

use App\Models\DeliverMethod;
use Lorisleiva\Actions\Concerns\AsAction;

class GetDeliverMethods
{
  use AsAction;

  public function handle($limit = 10, $paginate = false)
  {
    $deliver_methods = [];
    if ($paginate) {
      $deliver_methods = DeliverMethod::paginate($limit);
    } else {
      $deliver_methods = DeliverMethod::limit($limit)->get();
    }

    return $deliver_methods;
  }
}
