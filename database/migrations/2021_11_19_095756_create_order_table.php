<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
  public function up()
  {
    Schema::create('order', function (Blueprint $table) {
      $table->id('order_id');
      $table->unsignedBigInteger('user_id')->nullable();
      $table->decimal('total_harga', 9, 2)->nullable();
      $table->date('tgl_dipesan')->nullable();
      $table->date('tgl_diterima')->nullable();
      $table->string('status')->nullable();
      $table->unsignedBigInteger('payment_method_id')->nullable();
      $table->unsignedBigInteger('deliver_method_id')->nullable();
      $table->timestamps();

      $table->foreign('user_id')->references('user_id')->on('user')->onDelete('cascade');
      $table->foreign('deliver_method_id')->references('deliver_method_id')->on('deliver_method');
      $table->foreign('payment_method_id')->references('payment_method_id')->on('payment_method');
    });
  }

  public function down()
  {
    Schema::dropIfExists('order');
  }
}
