<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
  public function up()
  {
    Schema::create('user', function (Blueprint $table) {
      $table->id('user_id');
      $table->unsignedBigInteger('account_id')->nullable();
      $table->string('nama');
      $table->string('foto_profil')->nullable();
      $table->string('no_hp')->nullable();
      $table->char('jenis_kelamin', 2)->nullable();
      $table->string('alamat')->nullable();
      $table->timestamps();

      $table->foreign('account_id')->references('account_id')->on('account')->onDelete('cascade');
    });
  }

  public function down()
  {
    Schema::dropIfExists('user');
  }
}
