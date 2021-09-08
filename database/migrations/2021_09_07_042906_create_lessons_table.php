<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id');
            $table->string('title', 100);
            $table->float('learn_time');
            $table->string('description', 255);
            $table->string('requiments', 100);
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
        Schema::dropIfExists('lessons');
    }
}
