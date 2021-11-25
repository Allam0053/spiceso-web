<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Actions\Auth\Admin\RegisterAdmin;
use App\Http\Requests\Auth\RegisterRequest;
use Exception;

class RegisterAdminController extends Controller
{
  public function create()
  {
    return view('layouts.auth.admin.register');
  }

  public function store(RegisterRequest $request)
  {
    try {
      $response = RegisterAdmin::run($request->only(['email', 'password']), $request->nama);

      if ($response) {
        return redirect()->route('admin.dashboard');
      } else {
        return redirect()->back()->with('error', 'Daftar gagal, silahkan daftar ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }
}
