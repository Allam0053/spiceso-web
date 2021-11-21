<?php

namespace App\Actions\User\Trolley;

use App\Models\Trolley;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreTrolley
{
  use AsAction;

  public function handle($fill)
  {
    $trolley = Trolley::create($fill);

    return $trolley;
  }
}
