<?php

namespace App\Http\Controllers\Admin\User;

use App\Actions\Admin\User\GetUser;
use App\Actions\Admin\User\GetUsers;
use App\Http\Controllers\Controller;
use Exception;

class UserController extends Controller
{
  public function index()
  {
    try {
      $response = GetUsers::run(10, true);

      if ($response) {
        return redirect()->route('', ['users' => $response]);
      } else {
        return redirect()->back()->with('error', 'Coba muat ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }

  public function show($id)
  {
    try {
      $response = GetUser::run($id);

      if ($response) {
        return redirect()->route('', ['user' => $response]);
      } else {
        return redirect()->back()->with('error', 'Coba muat ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }
}
