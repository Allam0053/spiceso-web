<?php

namespace App\Http\Controllers\Factory\Implements;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Actions\Admin\Product\DeleteProduct;
use App\Actions\Admin\Product\GetProduct;
use App\Actions\Admin\Product\GetProducts;
use App\Actions\Admin\Order\GetOrders;
use App\Actions\Admin\User\GetUsers;
use App\Actions\Admin\Product\StoreProduct;
use App\Actions\Admin\Product\UpdateProduct;
use App\Actions\Admin\ProductCategory\GetProductCategories;
use App\Http\Controllers\Factory\Interfaces\Common;
use Illuminate\Foundation\Http\FormRequest;
use Exception;

class Dashboard extends Controller implements Common
{
    public function index()
    {
        $users = GetUsers::run(10000, false);
        $products = GetProducts::run(10000, false);
        $orders = GetOrders::run(10000, false);
        $categories = GetProductCategories::run(10, true);

        return view('layouts.admin.dashboard', ['users' => $users, 'products' => $products, 'orders' => $orders, 'categories' => $categories]);
    }

    public function create()
    {
    }

    public function store(FormRequest $request)
    {
        try {
            $response = StoreProduct::run($request->except(['_method', '_token']));

            if ($response) {
                return redirect()->route('', ['product' => $response]);
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
            $response = GetProduct::run($id);

            if ($response) {
                return redirect()->route('', ['product' => $response]);
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
            $response = GetProduct::run($id);

            if ($response) {
                return redirect()->route('', ['product' => $response]);
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
            $response = UpdateProduct::run($request->except(['_method', '_token']), $id);

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
            $response = DeleteProduct::run($id);

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
