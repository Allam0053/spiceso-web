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
    'nama',
    'foto_profil',
    'no_hp',
    'jenis_kelamin',
    'alamat'
  ];

  public function account()
  {
    return $this->belongsTo(Account::class, 'account_id', 'account_id');
  }

  public function orders()
  {
    return $this->hasMany(Order::class, 'user_id', 'user_id');
  }

  public function trolley()
  {
    return $this->hasOne(Trolley::class, 'user_id', 'user_id');
  }
}
