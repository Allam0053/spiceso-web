<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'nama' => ['required', 'string'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:account'],
      'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ];
  }
}
