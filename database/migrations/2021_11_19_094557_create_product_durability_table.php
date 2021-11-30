<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDurabilityTable extends Migration
{
  public function up()
  {
    Schema::create('product_durability', function (Blueprint $table) {
      $table->id('product_durability_id');
      $table->string('nama');
      $table->integer('min');
      $table->integer('max');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('product_durability');
  }
}
