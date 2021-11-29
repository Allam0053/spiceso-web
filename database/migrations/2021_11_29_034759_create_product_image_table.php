<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductImageTable extends Migration
{
  public function up()
  {
    Schema::create('product_image', function (Blueprint $table) {
      $table->id('product_image_id');
      $table->unsignedBigInteger('product_id');
      $table->string('nama')->nullable();
      $table->text('link');
      $table->timestamps();

      $table->foreign('product_id')->references('product_id')->on('product')->onDelete('cascade');
    });
  }

  public function down()
  {
    Schema::dropIfExists('product_image');
  }
}
