<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('order_id');
            $table->string('type');
            $table->uuid('ticket_id')->nullable();
            $table->uuid('product_id')->nullable();
            $table->decimal('amount', $precision = 8, $scale = 2);
            $table->integer('qty');
            $table->decimal('line_total', $precision = 8, $scale = 2);
            $table->string('status');
            $table->uuid('entry_user_id');
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('ticket_id')->references('id')->on('tickets');
            $table->foreign('product_id')->references('id')->on('products');
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
        Schema::dropIfExists('order_details');
    }
}
