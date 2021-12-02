<?php

namespace App\Actions\User\User;

use App\Models\User;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateUser
{
  use AsAction;

  public function handle($fill, $id)
  {
    $user = User::findOrFail($id)->update($fill);

    return $user;
  }
}
