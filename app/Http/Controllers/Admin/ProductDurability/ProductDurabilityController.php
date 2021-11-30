<?php

namespace App\Http\Controllers\Admin\ProductDurability;

use App\Actions\Admin\ProductDurability\DeleteProductDurability;
use App\Actions\Admin\ProductDurability\GetProductDurability;
use App\Actions\Admin\ProductDurability\GetProductDurabilities;
use App\Actions\Admin\ProductDurability\StoreProductDurability;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductDurability\StoreProductDurabilityRequest;
use Exception;

class ProductDurabilityController extends Controller
{
  public function index()
  {
    try {
      $response = GetProductDurabilities::run(10, true);

      if ($response) {
        return view('layouts.admin.productdurability.index', ['durabilities' => $response]);
      } else {
        return redirect()->back()->with('error', 'Coba muat ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }

  public function create()
  {
    return view('layouts.admin.productdurability.create');
  }

  public function store(StoreProductDurabilityRequest $request)
  {
    try {
      $response = StoreProductDurability::run($request);

      if ($response) {
        return redirect()->route('admin.productdurabilitys');
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
      $response = GetProductDurability::run($id);

      if ($response) {
        return view('layouts.admin.productdurability.show', ['ProductDurability' => $response]);
      } else {
        return redirect()->back()->with('error', 'Coba muat ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }

  public function destroy($id)
  {
    try {
      $response = DeleteProductDurability::run($id);

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
