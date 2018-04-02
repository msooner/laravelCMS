<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('uid');
            $table->string('user_name')->default('PUPU');
            $table->string('phone_num')->unique();
          //  $table->string('phone_num')->default('NULL');
            $table->string('email')->default('NULL');
            $table->string('avatar')->default('http://api.pupupula.cn/uploads/applogo108108.png');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
