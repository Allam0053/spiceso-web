<?php

namespace App\Http\Requests\User\Trolley;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrolleyRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'user_id' => ['required', 'integer'],
    ];
  }
}
