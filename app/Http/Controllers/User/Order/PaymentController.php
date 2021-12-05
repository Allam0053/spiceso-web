<?php

namespace App\Http\Controllers\User\Order;

use App\Actions\Admin\DeliverMethod\GetDeliverMethods;
use App\Actions\Admin\PaymentMethod\GetPaymentMethods;
use App\Actions\Common\Order\GetOrder;
use App\Actions\Common\Order\UpdateOrder;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
  public function show($id)
  {
    try {
      $order = GetOrder::run($id);
      $delivers = GetDeliverMethods::run();
      $payments = GetPaymentMethods::run();

      if ($order) {
        return view('layouts.user.payment.show', compact([
          'order',
          'delivers',
          'payments',
        ]));
      } else {
        return redirect()->back()->with('error', 'Coba muat ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }

  public function update(Request $request, $id)
  {
    try {
      $response = UpdateOrder::run($request->except(['_method', '_token']), $id);

      if ($response) {
        return redirect()->route('user.orders');
      } else {
        return redirect()->back()->with('error', 'Coba masukkan ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }
}
