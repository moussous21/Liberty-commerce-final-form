<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('login');
            $table->string('Menu');
            $table->string('social media');
            $table->string('search', 255)->nullable();
            $table->integer('users_ID')->unsigned();
            $table->integer('cart_ID')->unsigned();
            $table->integer('catalog_ID')->unsigned();
            $table->timestamps();
        });

        Schema::table('homepage', function (Blueprint $table) {
            $table->foreign('users_ID')->references('ID')->on('users');
            $table->foreign('cart_ID')->references('ID')->on('cart');
            $table->foreign('catalog_ID')->references('ID')->on('catalog');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homepage');
    }
}
