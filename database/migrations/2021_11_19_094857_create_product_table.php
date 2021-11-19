<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
  public function up()
  {
    Schema::create('product', function (Blueprint $table) {
      $table->id('product_id');
      $table->unsignedBigInteger('admin_id')->nullable();
      $table->string('nama');
      $table->text('deskripsi')->nullable();
      $table->integer('stok')->nullable();
      $table->decimal('harga', 9, 2)->nullable();
      $table->timestamps();

      $table->foreign('admin_id')->references('admin_id')->on('admin')->onDelete('cascade');
    });
  }

  public function down()
  {
    Schema::dropIfExists('product');
  }
}
