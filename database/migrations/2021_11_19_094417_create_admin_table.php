<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
  public function up()
  {
    Schema::create('admin', function (Blueprint $table) {
      $table->id('admin_id');
      $table->unsignedBigInteger('account_id');
      $table->string('nama');
      $table->string('no_hp')->nullable();
      $table->char('jenis_kelamin', 2)->nullable();
      $table->timestamps();

      $table->foreign('account_id')->references('account_id')->on('account')->onDelete('cascade');
    });
  }

  public function down()
  {
    Schema::dropIfExists('admin');
  }
}
