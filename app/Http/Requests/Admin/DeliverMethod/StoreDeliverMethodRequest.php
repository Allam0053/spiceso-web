<?php

namespace App\Http\Requests\Admin\DeliverMethod;

use Illuminate\Foundation\Http\FormRequest;

class StoreDeliverMethodRequest extends FormRequest
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
      'penyedia' => ['nullable', 'string'],
      'harga' => ['nullable', 'numeric'],
    ];
  }
}
