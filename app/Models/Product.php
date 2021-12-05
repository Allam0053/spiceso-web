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
    'harga',
    'komposisi',
    'product_category_id',
    'product_durability_id',
  ];

  public function admin()
  {
    return $this->belongsTo(Admin::class, 'admin_id', 'admin_id');
  }

  public function category()
  {
    return $this->belongsTo(ProductCategory::class, 'product_category_id', 'product_category_id');
  }

  public function durability()
  {
    return $this->belongsTo(ProductDurability::class, 'product_durability_id', 'product_durability_id');
  }

  public function images()
  {
    return $this->hasMany(ProductImage::class, 'product_id', 'product_id');
  }

  public function orders()
  {
    return $this->belongsToMany(Order::class, 'order_product', 'product_id', 'order_id')
      ->withPivot('jumlah', 'product_id')
      ->using(OrderProduct::class);
  }

  public function trolleys()
  {
    return $this->belongsToMany(Trolley::class, 'trolley_product', 'product_id', 'trolley_id')
      ->withPivot('jumlah')
      ->using(TrolleyProduct::class);
  }
}
