<?php

namespace App\Http\Requests\User\Order;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'user_id' => ['required', 'integer'],
      'total_harga' => ['nullable', 'numeric'],
      'tgl_dipesan' => ['nullable', 'date'],
      'tgl_diterima' => ['nullable', 'date'],
    ];
  }
}
