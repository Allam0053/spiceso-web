<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      // 'admin_id' => ['integer'],
      // 'nama' => ['string'],
      // 'deskripsi' => ['string'],
      // 'stok' => ['integer'],
      // 'harga' => ['numeric'],
    ];
  }
}
