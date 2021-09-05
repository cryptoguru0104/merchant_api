<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('type');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('thumb_url')->nullable();
            $table->string('image_url')->nullable();
            $table->decimal('amount', $precision = 8, $scale = 2)->nullable();
            $table->uuid('entry_user_id');
            $table->timestamps();

            $table->foreign('entry_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
