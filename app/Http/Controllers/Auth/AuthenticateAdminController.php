<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Actions\Auth\LoginAccount;
use App\Actions\Auth\LogoutAccount;
use Illuminate\Http\Request;

class AuthenticateAdminController extends Controller
{
  public function create()
  {
    return view('admin.login');
  }

  public function store(LoginRequest $request)
  {
    $response = LoginAccount::run($request);

    if ($response) {
      return redirect()->route('admin.dashboard');
    } else {
      return redirect()->back()->with('error', 'Masuk gagal, silahkan masuk ulang!');
    }
  }

  public function destroy(Request $request)
  {
    $response = LogoutAccount::run($request);

    if ($response) {
      return redirect()->route('admin.login');
    } else {
      return redirect()->back()->with('error', 'Keluar gagal, silahkan keluar ulang!');
    }
  }
}
