<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountTable extends Migration
{
  public function up()
  {
    Schema::create('account', function (Blueprint $table) {
      $table->id('account_id');
      $table->string('role');
      $table->string('email')->unique();
      $table->timestamp('email_verified_at')->nullable();
      $table->string('password');
      $table->rememberToken();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('account');
  }
}
