<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('u_user', function (Blueprint $table) {
            $table->increments('userid')->comment('用户id');
            $table->string('username',50)->index()->comment('用户名');
            $table->string('password', 255)->comment('密码');
            $table->string('phone', 20)->index()->comment('手机号码');
            $table->string('nickname', 255)->comment('昵称');
            $table->unsignedInteger('birth_year', false)->comment('出生年');
            $table->unsignedInteger('birth_month', false)->comment('出生月');
            $table->unsignedInteger('birth_day', false)->comment('出生日');
            $table->enum('sex', ['0', '1', '2'])->comment('性别：{0:未知，1:男，2:女}');
            $table->string('salt', 255)->comment('盐');
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
        Schema::dropIfExists('u_user');
    }
}
