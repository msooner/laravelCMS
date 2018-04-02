<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuperUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('super_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phoneNum')->default('NULL');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('avatar')->default('img/user2-160x160.jpg');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('super_users');
    }
}
