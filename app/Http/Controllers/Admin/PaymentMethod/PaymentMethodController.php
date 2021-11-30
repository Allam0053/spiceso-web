<?php

namespace App\Http\Controllers\Admin\PaymentMethod;

use App\Actions\Admin\PaymentMethod\DeletePaymentMethod;
use App\Actions\Admin\PaymentMethod\GetPaymentMethod;
use App\Actions\Admin\PaymentMethod\GetPaymentMethods;
use App\Actions\Admin\PaymentMethod\StorePaymentMethod;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PaymentMethod\StorePaymentMethodRequest;
use Exception;

class PaymentMethodController extends Controller
{
  public function index()
  {
    try {
      $response = GetPaymentMethods::run(10, true);

      if ($response) {
        return view('layouts.admin.paymentmethod.index', ['payments' => $response]);
      } else {
        return redirect()->back()->with('error', 'Coba muat ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }

  public function store(StorePaymentMethodRequest $request)
  {
    try {
      $response = StorePaymentMethod::run($request->except(['_token', '_method']));

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
      $response = DeletePaymentMethod::run($id);

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
