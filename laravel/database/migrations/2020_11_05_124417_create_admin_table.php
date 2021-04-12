<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Email')->unique();
            $table->string('Password');
            $table->integer('users_ID')->unsigned();
            $table->integer('admin_rights_ID')->unsigned();;
            $table->timestamps();
        });
        Schema::table('admin', function (Blueprint $table) {
            $table->foreign('users_ID')->references('ID')->on('users');
            $table->foreign('admin_rights_ID')->references('ID')->on('admin_rights');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
