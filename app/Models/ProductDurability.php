<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDurability extends Model
{
  use HasFactory;

  protected $table = 'product_durability';

  protected $primaryKey = 'product_durability_id';

  protected $fillable = [
    'nama',
    'min',
    'max',
  ];

  public function products()
  {
    return $this->hasMany(Product::class, 'product_durability_id', 'product_durability_id');
  }
}
