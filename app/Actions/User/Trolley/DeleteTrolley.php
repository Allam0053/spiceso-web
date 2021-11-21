<?php

namespace App\Actions\User\Trolley;

use App\Models\Trolley;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteTrolley
{
  use AsAction;

  public function handle($id)
  {
    $trolley = Trolley::findOrFail($id)->delete();

    return $trolley;
  }
}
