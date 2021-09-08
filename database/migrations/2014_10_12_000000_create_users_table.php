<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->integer('role');
            $table->string('name', 30);
            $table->string('email', 80);
            $table->string('password', 80);
            $table->string('avatar', 255);
            $table->date('birthday');
            $table->string('address', 100)->nullable();
            $table->string('phone', 20);
            $table->string('about_me', 255);
            $table->integer('deleted_at');
            $table->timestamp('update_at')->default(\DB::raw('CURRENT_TIMESTAMP'));;
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));;
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
