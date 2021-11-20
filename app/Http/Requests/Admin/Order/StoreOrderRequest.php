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
      'total_harga' => ['numeric'],
      'tgl_dipesan' => ['date'],
      'tgl_diterima' => ['date'],
    ];
  }
}
