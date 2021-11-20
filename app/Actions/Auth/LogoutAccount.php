<?php

namespace App\Actions\Auth;

use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogoutAccount
{
  use AsAction;

  public function handle(Request $request)
  {
    Auth::logout();

    $response = $request->session()->invalidate();

    $request->session()->regenerateToken();

    return $response;
  }
}
