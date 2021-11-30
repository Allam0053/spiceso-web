<?php

namespace App\Actions\Admin\DeliverMethod;

use App\Models\DeliverMethod;
use Lorisleiva\Actions\Concerns\AsAction;

class GetDeliverMethods
{
  use AsAction;

  public function handle($limit = 10, $paginate = false)
  {
    $product_durabilitys = [];
    if ($paginate) {
      $product_durabilitys = DeliverMethod::paginate($limit);
    } else {
      $product_durabilitys = DeliverMethod::limit($limit)->get();
    }

    return $product_durabilitys;
  }
}
