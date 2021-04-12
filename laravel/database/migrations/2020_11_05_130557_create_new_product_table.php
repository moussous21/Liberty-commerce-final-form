<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_product', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->string('category')->nullable();
            $table->integer('admin_ID')->unsigned();
            $table->timestamps();
        });
        Schema::table('new_product', function (Blueprint $table) {
            $table->foreign('admin_ID')->references('ID')->on('admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_product');
    }
}
