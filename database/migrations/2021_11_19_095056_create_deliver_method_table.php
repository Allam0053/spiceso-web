<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliverMethodTable extends Migration
{
  public function up()
  {
    Schema::create('deliver_method', function (Blueprint $table) {
      $table->id('deliver_method_id');
      $table->string('nama');
      $table->integer('min');
      $table->integer('max');
      $table->string('penyedia');
      $table->decimal('harga', 9, 2)->nullable();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('deliver_method');
  }
}
