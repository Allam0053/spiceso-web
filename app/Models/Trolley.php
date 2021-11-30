<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trolley extends Model
{
  use HasFactory;

  protected $table = 'trolley';

  protected $primaryKey = 'trolley_id';

  protected $fillable = [
    'user_id'
  ];

  public function user()
  {
    return $this->belongsTo(User::class, 'user_id', 'user_id');
  }

  public function products()
  {
    return $this->belongsToMany(Product::class, 'trolley_product', 'product_id', 'product_id');
  }
}
