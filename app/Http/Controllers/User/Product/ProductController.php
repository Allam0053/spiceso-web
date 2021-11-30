<?php

namespace App\Http\Controllers\User\Product;
use App\Actions\Common\Product\GetProduct;
use App\Actions\Common\Product\GetProducts;
use App\Actions\Admin\ProductCategory\GetProductCategories;
use App\Actions\Admin\ProductDurability\GetProductDurabilities;
use App\Http\Controllers\Controller;
use Exception;

class ProductController extends Controller
{
  public function index()
  {
    try {
      $products = GetProducts::run(10, true);
      $durabilities = GetProductDurabilities::run();
      $categories = GetProductCategories::run();

      if ($products && $durabilities && $categories) {
        return view('layouts.user.product.index', compact([
          'products',
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

  public function show($id)
  {
    try {
      $response = GetProduct::run($id);

      if ($response) {
        return view('layouts.user.product.show', ['product' => $response]);
      } else {
        return redirect()->back()->with('error', 'Coba muat ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }
}
