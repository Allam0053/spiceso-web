<?php

namespace App\Http\Middleware\Auth;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateAccount
{
  public function handle(Request $request, Closure $next, $role)
  {
    if (!Auth::check()) {
      if ($role == 'user') {
        return redirect()->route('user.login');
      } else if ($role == 'admin') {
        return redirect()->route('admin.login');
      }
    }

    if ($role == 'user') {
      if (Auth::user()->role == 'admin') {
        return redirect()->route('admin.dashboard');
      }
    } else if ($role == 'admin') {
      if (Auth::user()->role == 'user') {
        return redirect()->route('user.dashboard');
      }
    }

    return $next($request);
  }
}
