<?php

namespace App\Http\Controllers\Common\Dashboard;

use App\Actions\Admin\ProductCategory\GetProductCategories;
use App\Http\Controllers\Controller;
use App\Actions\Common\Product\GetProducts;
use Exception;

class DashboardController extends Controller
{
  public function index()
  {
    try {
      $products = GetProducts::run(10, true);
      $categories = GetProductCategories::run(3);

      if ($products && $categories) {
        return view('layouts.common.dashboard', compact(['products', 'categories']));
      } else {
        return redirect()->back()->with('error', 'Coba muat ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }
}
