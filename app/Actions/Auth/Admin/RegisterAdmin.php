<?php

namespace App\Actions\Auth\Admin;

use App\Models\Account;
use App\Models\Admin;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class RegisterAdmin
{
  use AsAction;

  public function handle($credentials, $nama)
  {
    $account = Account::create([
      'email' => $credentials['email'],
      'password' => Hash::make($credentials['password']),
      'role' => 'admin',
    ]);

    if (!$account) {
      return false;
    }

    event(new Registered($account));

    Auth::login($account);

    $admin = Admin::create([
      'nama' => $nama,
      'account_id' => $account->account_id,
    ]);

    if (!$admin) {
      return false;
    }

    $account->admin()->save($admin);

    return true;
  }
}
