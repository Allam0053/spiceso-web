<?php

namespace App\Http\Requests\User\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'account_id' => ['required', 'integer'],
      'nama' => ['nullable', 'string'] ,
      'foto_profil' => ['nullable', 'string'],
      'no_hp' => ['nullable', 'string'],
      'jenis_kelamin' => ['nullable', 'string'],
      'alamat' => ['nullable', 'string']
    ];
  }
}
