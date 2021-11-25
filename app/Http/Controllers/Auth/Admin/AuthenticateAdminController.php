<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Actions\Auth\Account\LoginAccount;
use App\Actions\Auth\Account\LogoutAccount;
use Illuminate\Http\Request;
use Exception;

class AuthenticateAdminController extends Controller
{
  public function create()
  {
    return view('layouts.auth.admin.login');
  }

  public function store(LoginRequest $request)
  {
    try {
      $response = LoginAccount::run($request);

      if ($response) {
        return redirect()->route('admin.dashboard');
      } else {
        return redirect()->back()->with('error', 'Masuk gagal, silahkan masuk ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }

  public function destroy(Request $request)
  {
    try {
      $response = LogoutAccount::run($request);

      if ($response) {
        return redirect()->route('admin.login');
      } else {
        return redirect()->back()->with('error', 'Keluar gagal, silahkan keluar ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }
}
