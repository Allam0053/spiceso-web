<?php

namespace App\Http\Requests\Admin\ProductDurability;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductDurabilityRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'nama' => ['required', 'string'],
      'min' => ['nullable', 'integer'],
      'max' => ['nullable', 'integer'],
    ];
  }
}
