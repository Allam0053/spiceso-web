<?php

namespace App\Actions\Admin\User;

use App\Models\User;
use Lorisleiva\Actions\Concerns\AsAction;

class GetUsers
{
  use AsAction;

  public function handle($limit = 10, $paginate = false)
  {
    $users = [];
    if ($paginate) {
      $users = User::paginate($limit);
    } else {
      $users = User::limit($limit)->get();
    }

    return $users;
  }
}
