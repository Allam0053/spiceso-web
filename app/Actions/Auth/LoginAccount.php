<?php

namespace App\Actions\Auth;

use Lorisleiva\Actions\Concerns\AsAction;
use App\Http\Requests\Auth\LoginRequest;

class LoginAccount
{
  use AsAction;

  public function handle(LoginRequest $request)
  {
    $request->authenticate();
    $response = $request->session()->regenerate();

    return $response;
  }
}
