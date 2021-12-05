<?php

namespace App\Http\Controllers\User\Trolley;

use App\Actions\User\Trolley\DeleteTrolley;
use App\Actions\User\Trolley\GetTrolley;
use App\Actions\User\Trolley\StoreTrolley;
use App\Actions\User\Trolley\UpdateTrolley;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\Trolley\StoreTrolleyRequest;
use Exception;
use Illuminate\Support\Facades\Auth;

class TrolleyController extends Controller
{
  public function index()
  {
    try {
      $trolley = GetTrolley::run(Auth::user()->user->user_id);

      if ($trolley) {
        return view('layouts.user.trolley.index', compact(['trolley']));
      } else {
        return redirect()->back()->with('error', 'Coba muat ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }

  public function create()
  {
    return view('');
  }

  public function store(StoreTrolleyRequest $request)
  {
    try {
      $response = StoreTrolley::run($request->except(['_method', '_token']));
      
      if ($response) {
        return redirect()->back()->with('success', 'Berhasil menambahkan produk ke troli.json');
      } else {
        return redirect()->back()->with('error', 'Coba masukkan dan simpan ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }

  public function show($id)
  {
    try {
      $response = GetTrolley::run($id);

      if ($response) {
        return redirect()->route('', ['trolley' => $response]);
      } else {
        return redirect()->back()->with('error', 'Coba muat ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }

  public function edit($id)
  {
    try {
      $response = GetTrolley::run($id);

      if ($response) {
        return redirect()->route('', ['trolley' => $response]);
      } else {
        return redirect()->back()->with('error', 'Coba muat ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }

  public function update(StoreTrolleyRequest $request, $id)
  {
    try {
      $response = UpdateTrolley::run($request->except(['_method', '_token']), $id);

      if ($response) {
        return redirect()->back()->with('success', $response . ' behasil diperbarui');
      } else {
        return redirect()->back()->with('error', 'Coba masukkan ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }

  public function destroy($id, $from)
  {
    try {
      $response = DeleteTrolley::run($id, $from);

      if ($response) {
        return redirect()->back()->with('success', $response . ' behasil dihapus');
      } else {
        return redirect()->back()->with('error', 'Coba hapus ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }
}
