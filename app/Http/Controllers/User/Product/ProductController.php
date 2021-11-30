<?php

namespace App\Http\Controllers\User\Product;
use App\Actions\Common\Product\GetProduct;
use App\Actions\Common\Product\GetProducts;
use App\Http\Controllers\Controller;
use Exception;

class ProductController extends Controller
{
  public function index()
  {
    try {
      $response = GetProducts::run(10, true);

      if ($response) {
        return view('layouts.user.product.index', ['products' => $response]);
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
