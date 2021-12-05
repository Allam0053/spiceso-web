<?php

namespace App\Http\Requests\Admin\Order;

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
      'admin_id' => ['required', 'integer'],
      'status' => ['nullable', 'string'],
      'total_harga' => ['nullable', 'numeric'],
      'tgl_dipesan' => ['nullable', 'date'],
      'tgl_diterima' => ['nullable', 'date'],
    ];
  }
}
