<?php

namespace App\Actions\User\User;

use App\Models\User;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateUser
{
  use AsAction;

  public function handle(array $fill, $id)
  {
    $user = User::findOrFail($id)->update($fill);

    return $user;
  }
}
