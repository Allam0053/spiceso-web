<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Actions\Auth\RegisterAdmin;
use App\Http\Requests\Auth\RegisterRequest;

class RegisterAdminController extends Controller
{
  public function create()
  {
    return view('admin.register');
  }

  public function store(RegisterRequest $request)
  {
    $response = RegisterAdmin::run($request->only(['email', 'password']), $request->nama);

    if ($response) {
      return redirect()->route('admin.dashboard');
    } else {
      return redirect()->back()->with('error', 'Daftar gagal, silahkan daftar ulang!');
    }
  }
}
