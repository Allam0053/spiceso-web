<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentMethodTable extends Migration
{
  public function up()
  {
    Schema::create('payment_method', function (Blueprint $table) {
      $table->id('payment_method_id');
      $table->string('bank');
      $table->string('nama')->nullable();
      $table->string('rekening')->nullable();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('payment_method');
  }
}
