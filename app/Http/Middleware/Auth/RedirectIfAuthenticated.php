<?php

namespace App\Http\Middleware\Auth;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
  public function handle(Request $request, Closure $next, $role)
  {
    if (Auth::check()) {
      if ($role == 'user') {
        if (Auth::user()->role == $role) {
          return redirect()->route('user.dashboard');
        } else if (Auth::user()->role == 'admin') {
          return redirect()->route('admin.dashboard');
        }
      } else if ($role == 'admin') {
        if (Auth::user()->role == $role) {
          return redirect()->route('admin.dashboard');
        } else if (Auth::user()->role == 'user') {
          return redirect()->route('user.dashboard');
        }
      }
    }

    return $next($request);
  }
}
