<?php

namespace App\Actions\User\Trolley;

use App\Models\Trolley;
use Lorisleiva\Actions\Concerns\AsAction;

class GetTrolleys
{
  use AsAction;

  public function handle($limit = 10, $paginate = false)
  {
    $trolleys = [];
    if ($paginate) {
      $trolleys = Trolley::paginate($limit);
    } else {
      $trolleys = Trolley::limit($limit)->get();
    }

    return $trolleys;
  }
}
