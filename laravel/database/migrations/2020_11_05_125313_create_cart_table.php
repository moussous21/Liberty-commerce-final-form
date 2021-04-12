<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('amount');
            $table->integer('price');
            $table->string('product_name');
            $table->integer('users_ID')->unsigned();
            $table->timestamps();
        });

        Schema::table('cart', function (Blueprint $table) {
            $table->foreign('users_ID')->references('ID')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
