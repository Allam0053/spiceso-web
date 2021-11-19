<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  use HasFactory;

  protected $table = 'user';

  protected $primaryKey = 'user_id';

  protected $fillable = [
    'account_id',
    'name',
    'no_hp',
    'jenis_kelamin',
    'alamat'
  ];

  public function account()
  {
    return $this->belongsTo(Account::class);
  }

  public function orders()
  {
    return $this->hasMany(Product::class);
  }

  public function trolley()
  {
    return $this->hasOne(Trolley::class);
  }
}
