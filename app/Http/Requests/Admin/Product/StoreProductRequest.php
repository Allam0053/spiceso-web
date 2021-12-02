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
      'admin_id' => ['required', 'integer'],
      'nama' => ['required', 'string'],
      'deskripsi' => ['nullable', 'string'],
      'stok' => ['nullable', 'integer'],
      'harga' => ['nullable', 'numeric'],
      'komposisi' => ['nullable', 'string'],
      'product_category_id' => ['nullable', 'integer'],
      'product_durability_id' => ['nullable', 'integer'],
    ];
  }
}
