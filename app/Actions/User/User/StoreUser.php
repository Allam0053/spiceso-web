<?php

namespace App\Actions\User\User;

use App\Models\User;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreUser
{
  use AsAction;

  public function handle($fill)
  {
    $user = User::create($fill);

    return $user;
  }
}
