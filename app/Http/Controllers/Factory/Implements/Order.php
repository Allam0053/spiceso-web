<?php

namespace App\Http\Controllers\Factory\Implements;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Factory\Interfaces\Common;
use Illuminate\Http\Request;

use App\Actions\Admin\Order\DeleteOrder;
use App\Actions\Common\Order\GetOrder;
use App\Actions\Common\Product\GetProduct;
use App\Actions\Admin\Order\GetOrders;
use App\Actions\Common\Order\StoreOrder;
use App\Actions\Common\Order\UpdateOrder;
use App\Http\Requests\Admin\Order\StoreOrderRequest;
use Illuminate\Foundation\Http\FormRequest;
use Exception;

class Order extends Controller implements Common
{
    public function index()
    {
        try {
            $response = GetOrders::run(10, true);

            if ($response) {
                return view('layouts.admin.order.index', ['orders' => $response]);
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

    public function store(FormRequest $request)
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
                return view('layouts.admin.order.show', ['order' => $response]);
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
                return view('layouts.admin.order.edit', ['order' => $response]);
            } else {
                return redirect()->back()->with('error', 'Coba muat ulang!');
            }
        } catch (Exception $exc) {
            return redirect()->back()->with('error', $exc->getMessage());
        }
    }

    public function update(FormRequest $request, $id)
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
