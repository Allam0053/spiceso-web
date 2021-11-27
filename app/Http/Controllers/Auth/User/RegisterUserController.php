<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
use App\Actions\Auth\User\RegisterUser;
use App\Actions\Auth\Account\LogoutAccount;
use App\Http\Requests\Auth\RegisterRequest;
use Exception;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
  public function create()
  {
    return view('layouts.auth.user.register');
  }

  public function store(RegisterRequest $request)
  {
    try {
      $response = RegisterUser::run($request->only(['email', 'password']), $request->nama);

      if ($response) {
        return redirect()->route('');
      } else {

        if (Auth::check()) {
          LogoutAccount::run($request);
        }

        return redirect()->back()->with('error', 'Daftar gagal, silahkan daftar ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }
}
