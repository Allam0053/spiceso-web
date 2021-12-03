<?php

namespace App\Http\Controllers\User\User;

use App\Http\Controllers\Controller;
use App\Actions\User\User\GetUser;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\User\StoreUserRequest;
use App\Actions\User\User\UpdateUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
      try {
        if(Auth::user()->role == 'user')
        {
          $id =  Auth::user()->user->user_id;
        }
  
        $response = GetUser::run($id);

        if ($response) {
          return view('layouts.user.profile.index', ['profile' => $response]);
        } else {
          return redirect()->back()->with('error', 'Coba muat ulang!');
        }
      } catch (Exception $exc) {
        return redirect()->back()->with('error', $exc->getMessage());
      }
    }
  
    public function edit()
    {
      try {
        if(Auth::user()->role == 'user')
        {
          $id =  Auth::user()->user->user_id;
        }
  
        $response = GetUser::run($id);

        if ($response) {
          return view('layouts.user.profile.edit', ['profile' => $response]);
        } else {
          return redirect()->back()->with('error', 'Coba muat ulang!');
        }
      } catch (Exception $exc) {
        return redirect()->back()->with('error', $exc->getMessage());
      }
    }
  
    public function update(StoreUserRequest $request)
    {
      try {
        if(Auth::user()->role == 'user')
        {
          $id =  Auth::user()->user->user_id;
        }
        // dd($request);

        $response = UpdateUser::run($request->except(['_method', '_token']), $id);
  
        if ($response) {
          return redirect()->back()->with('success', $response . ' behasil diperbarui');
        } else {
          return redirect()->back()->with('error', 'Coba masukkan ulang!');
        }
      } catch (Exception $exc) {
        return redirect()->back()->with('error', $exc->getMessage());
      }
    }
}
