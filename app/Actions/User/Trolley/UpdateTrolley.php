<?php

namespace App\Actions\User\Trolley;

use App\Models\Trolley;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateTrolley
{
  use AsAction;

  public function handle($fill, $id)
  {
    $trolley = Trolley::findOrFail($id)->update($fill);

    return $trolley;
  }
}
