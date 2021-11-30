<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrolleyProduct extends Model
{
  use HasFactory;

  protected $table = 'trolley_product';

  protected $fillable = [
    'trolley_id',
    'product_id'
  ];

  public function trolley()
  {
    return $this->belongsTo(Trolley::class, 'trolley_id', 'trolley_id');
  }

  public function product()
  {
    return $this->belongsTo(Product::class, 'product_id', 'product_id');
  }
}
