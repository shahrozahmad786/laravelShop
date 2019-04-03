<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            

            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('product_id')->nullable();
            $table->unsignedInteger('qty')->nullable();
            $table->unsignedInteger('price')->nullable();
            $table->unsignedInteger('payment_id')->nullable();
            $table->string('status')->nullable();
        
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
