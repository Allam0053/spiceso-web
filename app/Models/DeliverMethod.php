<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliverMethod extends Model
{
  use HasFactory;

  protected $table = 'deliver_method';

  protected $primaryKey = 'deliver_method_id';

  protected $fillable = [
    'nama',
    'min',
    'max',
    'penyedia',
    'harga',
  ];

  public function orders()
  {
    return $this->hasMany(Order::class, 'deliver_method_id', 'deliver_method_id');
  }
}
