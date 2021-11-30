<?php

namespace App\Http\Controllers\Admin\ProductCategory;

use App\Actions\Admin\ProductCategory\DeleteProductCategory;
use App\Actions\Admin\ProductCategory\GetProductCategory;
use App\Actions\Admin\ProductCategory\GetProductCategories;
use App\Actions\Admin\ProductCategory\StoreProductCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductCategory\StoreProductCategoryRequest;
use Exception;

class ProductCategoryController extends Controller
{
  public function index()
  {
    try {
      $response = GetProductCategories::run(10, true);

      if ($response) {
        return view('layouts.admin.productcategory.index', ['categories' => $response]);
      } else {
        return redirect()->back()->with('error', 'Coba muat ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }

  public function store(StoreProductCategoryRequest $request)
  {
    try {
      $response = StoreProductCategory::run($request->except(['_token', '_method']));

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
      $response = DeleteProductCategory::run($id);

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
