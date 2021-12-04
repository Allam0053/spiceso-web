<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  use HasFactory;

  protected $table = 'order';

  protected $primaryKey = 'order_id';

  protected $fillable = [
    'user_id',
    'total_harga',
    'tgl_dipesan',
    'tgl_diterima',
    'status',
    'payment_method_id',
    'deliver_method_id',
  ];

  public function user()
  {
    return $this->belongsTo(User::class, 'user_id', 'user_id');
  }

  public function payment()
  {
    return $this->belongsTo(PaymentMethod::class, 'payment_method_id', 'payment_method_id');
  }

  public function deliver()
  {
    return $this->belongsTo(DeliverMethod::class, 'deliver_method_id', 'deliver_method_id');
  }

  public function products()
  {
    return $this->belongsToMany(Product::class, 'order_product', 'product_id', 'product_id')
      ->withPivot('jumlah')
      ->using(OrderProduct::class);
  }
}
