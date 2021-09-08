<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('target_id');
            $table->integer('type', 1);
            $table->string('content', 255);
            $table->float('rate');
            $table->integer('location');
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
        Schema::dropIfExists('reviews');
    }
}
