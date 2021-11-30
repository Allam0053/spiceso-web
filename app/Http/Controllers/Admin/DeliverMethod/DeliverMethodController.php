<?php

namespace App\Http\Controllers\Admin\DeliverMethod;

use App\Actions\Admin\DeliverMethod\DeleteDeliverMethod;
use App\Actions\Admin\DeliverMethod\GetDeliverMethod;
use App\Actions\Admin\DeliverMethod\GetDeliverMethods;
use App\Actions\Admin\DeliverMethod\StoreDeliverMethod;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DeliverMethod\StoreDeliverMethodRequest;
use Exception;

class DeliverMethodController extends Controller
{
  public function index()
  {
    try {
      $response = GetDeliverMethods::run(10, true);

      if ($response) {
        return view('layouts.admin.delivermethod.index', ['delivers' => $response]);
      } else {
        return redirect()->back()->with('error', 'Coba muat ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }

  public function store(StoreDeliverMethodRequest $request)
  {
    try {
      $response = StoreDeliverMethod::run($request->except(['_token', '_method']));

      if ($response) {
        return redirect()->back()->with('success', 'Data ketahanan berhasil ditambahkan!');
      } else {
        return redirect()->back()->with('error', 'Coba masukkan dan simpan ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }

  public function destroy($id)
  {
    try {
      $response = DeleteDeliverMethod::run($id);

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
