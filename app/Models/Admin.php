<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
  use HasFactory;

  protected $table = 'admin';

  protected $primaryKey = 'admin_id';

  protected $fillable = [
    'account_id',
    'name',
    'no_hp',
    'jenis_kelamin',
  ];

  public function account()
  {
    return $this->belongsTo(Account::class);
  }
}
