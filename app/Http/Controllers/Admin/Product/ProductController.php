<?php

namespace App\Http\Controllers\Admin\Product;

use App\Actions\Admin\Product\DeleteProduct;
use App\Actions\Admin\Product\GetProduct;
use App\Actions\Admin\Product\GetProducts;
use App\Actions\Admin\Product\StoreProduct;
use App\Actions\Admin\Product\UpdateProduct;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreProductRequest;
use Storage;
use Exception;

class ProductController extends Controller
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
    return view('layouts.admin.product.create');
  }

  public function store(StoreProductRequest $request)
  {
    dd($request);
    foreach($images as $key => $value) {
      $file = file_get_contents($key);
      Storage::put('coba.png', $file);
    }
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

  public function update(StoreProductRequest $request, $id)
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
