<?php

namespace App\Http\Requests\Admin\PaymentMethod;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentMethodRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'bank' => ['required', 'string'],
      'nama' => ['nullable', 'string'],
      'rekening' => ['required', 'string'],
    ];
  }
}
