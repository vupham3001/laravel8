<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_users', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('course_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('courses_users_');
    }
}
