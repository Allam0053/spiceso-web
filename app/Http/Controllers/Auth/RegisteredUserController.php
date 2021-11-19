<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
  public function create()
  {
    return view('auth.register');
  }

  public function store(Request $request)
  {
    $request->validate([
      'email' => ['required', 'string', 'email', 'max:255', 'unique:account'],
      'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    $account = Account::create([
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);

    event(new Registered($account));

    Auth::login($account);

    return redirect(RouteServiceProvider::HOME);
  }
}
