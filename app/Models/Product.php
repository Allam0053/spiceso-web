<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;

  protected $table = 'product';

  protected $primaryKey = 'product_id';

  protected $fillable = [
    'admin_id',
    'nama',
    'deskripsi',
    'stok',
    'harga'
  ];

  public function admin()
  {
    return $this->belongsTo(Admin::class);
  }

  public function orders()
  {
    return $this->belongsToMany(Order::class, 'order_product');
  }

  public function trolleys()
  {
    return $this->belongsToMany(Trolley::class, 'trolley_product');
  }
}
