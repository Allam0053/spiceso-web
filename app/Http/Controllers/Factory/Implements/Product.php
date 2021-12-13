<?php

namespace App\Http\Controllers\Factory\Implements;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Factory\Interfaces\Common;
use Illuminate\Foundation\Http\FormRequest;

use App\Actions\Admin\Product\DeleteProduct;
use App\Actions\Common\Product\GetProduct;
use App\Actions\Common\Product\GetProducts;
use App\Actions\Admin\Product\StoreProduct;
use App\Actions\Admin\Product\UpdateProduct;
use App\Actions\Admin\ProductCategory\GetProductCategories;
use App\Actions\Admin\ProductDurability\GetProductDurabilities;
use App\Http\Requests\Admin\Product\StoreProductRequest;
use Exception;

class Product extends Controller implements Common
{
    public function index()
    {
        try {
            $response = GetProducts::run(10, true);

            if ($response) {
                return view('layouts.admin.product.index', ['products' => $response]);
            } else {
                return redirect()->back()->with('error', 'Coba muat ulang!');
            }
        } catch (Exception $exc) {
            return redirect()->back()->with('error', $exc->getMessage());
        }
    }

    public function create()
    {
        try {
            $durabilities = GetProductDurabilities::run();
            $categories = GetProductCategories::run();

            if ($durabilities && $categories) {
                return view('layouts.admin.product.create', compact([
                    'durabilities',
                    'categories',
                ]));
            } else {
                return redirect()->back()->with('error', 'Coba muat ulang!');
            }
        } catch (Exception $exc) {
            return redirect()->back()->with('error', $exc->getMessage());
        }
    }

    public function store(FormRequest $request)
    {
        try {
            $response = StoreProduct::run($request);

            if ($response) {
                return redirect()->route('admin.products');
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
                return view('layouts.admin.product.show', ['product' => $response]);
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
            $product = GetProduct::run($id);
            $durabilities = GetProductDurabilities::run();
            $categories = GetProductCategories::run();

            if ($product && $durabilities && $categories) {
                return view('layouts.admin.product.edit', compact([
                    'product',
                    'durabilities',
                    'categories',
                ]));
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
            $response = UpdateProduct::run($request, $id);

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
