<?php

namespace App\Actions\Auth;

use App\Models\Account;
use App\Models\User;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class RegisterUser
{
  use AsAction;

  public function handle($credentials, $nama)
  {
    $account = Account::create([
      'email' => $credentials->email,
      'password' => Hash::make($credentials->password),
      'role' => 'user',
    ]);

    if (!$account) {
      return false;
    }

    event(new Registered($account));

    Auth::login($account);

    $user = User::create([
      'nama' => $nama,
    ]);

    if (!$user) {
      return false;
    }

    $account->user->save($user);

    return true;
  }
}
