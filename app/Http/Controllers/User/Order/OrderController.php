<?php

namespace App\Http\Controllers\User\Order;

use App\Actions\Common\Order\GetOrder;
use App\Actions\Common\Order\GetOrders;
use App\Actions\Common\Order\StoreOrder;
use App\Actions\Common\Order\UpdateOrder;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\Order\StoreOrderRequest;
use Exception;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
  public function index()
  {
    try {
      $response = GetOrders::run(Auth::user()->user->user_id, 10, true);

      if ($response) {
        return view('layouts.user.order.index', ['orders' => $response]);
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
        return view('layouts.user.payment.index', ['order' => $response]);
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
}
