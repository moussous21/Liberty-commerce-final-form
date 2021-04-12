<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfirmationPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmation_payment', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('bill');
            $table->string('email');
            $table->string('reference');
            $table->integer('payment_ID')->unsigned();
            $table->timestamps();
        });

        Schema::table('confirmation_payment', function (Blueprint $table) {
            $table->foreign('payment_ID')->references('ID')->on('payment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('confirmation_payment');
    }
}
