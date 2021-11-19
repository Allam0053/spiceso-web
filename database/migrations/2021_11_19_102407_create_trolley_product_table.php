<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrolleyProductTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('trolley_product', function (Blueprint $table) {
      $table->unsignedBigInteger('trolley_id')->nullable();
      $table->unsignedBigInteger('product_id')->nullable();
      $table->timestamps();

      $table->foreign('trolley_id')->references('trolley_id')->on('oder')->onDelete('cascade');
      $table->foreign('product_id')->references('product_id')->on('product')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('trolley_product');
  }
}
