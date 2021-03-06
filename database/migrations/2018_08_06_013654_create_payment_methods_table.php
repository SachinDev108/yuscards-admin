<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vendor');
            $table->string('base_url');
            $table->string('apikey')->nullable();
            $table->string('masterkey')->nullable();
            $table->string('publickey')->nullable();
            $table->string('privatekey')->nullable();
            $table->string('token')->nullable();
            $table->string('logosrc')->nullable();
            $table->string('cancel_url')->nullable();
            $table->string('return_url')->nullable();
            $table->string('notify_url')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_methods');
    }
}
