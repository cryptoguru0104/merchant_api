<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
	    $table->uuid('id')->primary();
	    $table->string('imdb_id')->unique()->nullable();
	    $table->string('youtube_link')->nullable();
	    $table->string('poster_img')->nullable();
	    $table->string('bg_img')->nullable();
	    $table->string('title')->nullable();
	    $table->string('year')->nullable();
	    $table->string('rating')->nullable();
	    $table->string('length')->nullable();
	    $table->string('genre')->nullable();
	    $table->string('short_desc')->nullable();
	    $table->uuid('entry_user_id');
	    $table->timestampTz('entry_date', $precision = 0)->useCurrent();
	    $table->timestampTz('update_date', $precision = 0)->useCurrentOnUpdate();
	    $table->foreign('entry_user_id')->references('id')->on('users');
;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('features');
    }
}
