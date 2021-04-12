<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_product', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('product name');
            $table->string('product image', 255);
            $table->longText('description');
            $table->integer('price');
            $table->string('reference');
            $table->string('categorie');
            $table->integer('stock');
            $table->boolean('add favorite')->nullable();
            $table->boolean('add to cart')->nullable();
            $table->integer('amount wanted')->nullable();
            $table->integer('Admin_ID')->unsigned();
            $table->integer('cart_ID')->unsigned();
            $table->timestamps();
        });

        Schema::table('page_product', function (Blueprint $table) {
            $table->foreign('Admin_ID')->references('ID')->on('Admin');
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
        Schema::dropIfExists('page_product');
    }
}
