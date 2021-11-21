<?php

namespace App\Http\Controllers\Admin\Order;

use App\Actions\Admin\Order\DeleteOrder;
use App\Actions\Admin\Order\GetOrder;
use App\Actions\Admin\Order\GetOrders;
use App\Actions\Admin\Order\StoreOrder;
use App\Actions\Admin\Order\UpdateOrder;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Order\StoreOrderRequest;
use Exception;

class OrderController extends Controller
{
  public function index()
  {
    try {
      $response = GetOrders::run(10, true);

      if ($response) {
        return redirect()->route('', ['orders' => $response]);
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

  public function store(StoreOrderRequest $request)
  {
    try {
      $response = StoreOrder::run($request->except(['_method', '_token']));

      if ($response) {
        return redirect()->route('', ['order' => $response]);
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
      $response = GetOrder::run($id);

      if ($response) {
        return redirect()->route('', ['order' => $response]);
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
      $response = GetOrder::run($id);

      if ($response) {
        return redirect()->route('', ['order' => $response]);
      } else {
        return redirect()->back()->with('error', 'Coba muat ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }

  public function update(StoreOrderRequest $request, $id)
  {
    try {
      $response = UpdateOrder::run($request->except(['_method', '_token']), $id);

      if ($response) {
        return redirect()->back()->with('success', $response . ' behasil diperbarui');
      } else {
        return redirect()->back()->with('error', 'Coba masukkan ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }

  public function destroy($id)
  {
    try {
      $response = DeleteOrder::run($id);

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
