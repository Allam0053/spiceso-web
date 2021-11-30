<?php

namespace App\Http\Requests\Admin\ProductCategory;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductCategoryRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'nama' => ['required', 'string'],
    ];
  }
}
