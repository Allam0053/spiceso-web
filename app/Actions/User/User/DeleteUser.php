<?php

namespace App\Actions\User\User;

use App\Models\User;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteUser
{
  use AsAction;

  public function handle($id)
  {
    $user = User::findOrFail($id)->delete();

    return $user;
  }
}
