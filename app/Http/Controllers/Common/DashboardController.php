<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Actions\Common\Product\GetProducts;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    try {
      $response = GetProducts::run(10, true);

      if ($response) {
        return view('layouts.common.dashboard', ['products' => $response]);
      } else {
        return redirect()->back()->with('error', 'Coba muat ulang!');
      }
    } catch (Exception $exc) {
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }
}