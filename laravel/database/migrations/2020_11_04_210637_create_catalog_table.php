<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('product image', 255);
            $table->string('product name');
            $table->integer('price product');
            $table->boolean('add to cart')->nullable();
            $table->integer('page_product_ID')->unsigned();
            $table->timestamps();
        });

        Schema::table('catalog', function (Blueprint $table) {
            $table->foreign('page_product_ID')->references('ID')->on('page_product');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog');
    }
}
