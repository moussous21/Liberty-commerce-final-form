<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('cart code');
            $table->string('cart code secret');
            $table->string('adress');
            $table->string('code promo')->nullable();
            $table->integer('cart_ID')->unsigned();
            $table->timestamps();
        });

        Schema::table('payment', function (Blueprint $table) {
            $table->foreign('cart_ID')->references('ID')->on('cart');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment');
    }
}
