<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class TrolleyProduct extends Pivot
{
  protected $table = 'trolley_product';

  protected $fillable = [
    'trolley_id',
    'product_id',
    'jumlah',
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
