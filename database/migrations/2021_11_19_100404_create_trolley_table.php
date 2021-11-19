<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrolleyTable extends Migration
{
  public function up()
  {
    Schema::create('trolley', function (Blueprint $table) {
      $table->id('trolley_id');
      $table->unsignedBigInteger('user_id')->nullable();
      $table->timestamps();

      $table->foreign('user_id')->references('user_id')->on('user')->onDelete('cascade');
    });
  }

  public function down()
  {
    Schema::dropIfExists('trolley');
  }
}
