<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Actions\Auth\RegisterUser;
use App\Http\Requests\Auth\RegisterRequest;

class RegisterUserController extends Controller
{
  public function create()
  {
    return view('user.register');
  }

  public function store(RegisterRequest $request)
  {
    $response = RegisterUser::run($request->only(['email', 'password']), $request->nama);

    if ($response) {
      return redirect()->route('user.dashboard');
    } else {
      return redirect()->back()->with('error', 'Daftar gagal, silahkan daftar ulang!');
    }
  }
}
