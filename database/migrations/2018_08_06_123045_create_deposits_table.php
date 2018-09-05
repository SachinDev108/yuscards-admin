<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('amount');
            $table->string('tx_id')->unique()->nullable();
            $table->string('yustx_id')->unique();
            $table->integer('user_id')->unsigned();
            $table->integer('address')->nullable();
            $table->integer('ticker_symbol')->nullable();
            $table->string('vendor', 100);
            $table->string('method', 100);
            $table->string('tx_hash')->nullable();
            $table->integer('yus_fees_percentage'); // Taxes bound the transaction
            $table->string('type',20);
            $table->string('status', 100);

            $table->foreign('user_id')->references('id')
                                      ->on('users')
                                      ->onDelete('cascade');
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
        Schema::dropIfExists('deposits');
    }
}
