<?php

namespace App\Actions\User\Trolley;

use App\Models\Trolley;
use Lorisleiva\Actions\Concerns\AsAction;

class GetTrolley
{
  use AsAction;

  public function handle($id)
  {
    $trolley = Trolley::where('user_id', $id)->first();

    return $trolley;
  }
}
