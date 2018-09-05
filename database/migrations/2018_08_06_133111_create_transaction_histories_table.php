<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('receiver_id')->unsigned()->default(null);
            $table->integer('sender_id')->unsigned()->default(null);
            $table->string('from_address', 200)->nullable();
            $table->string('to_address', 200)->nullable();
            $table->string('amount');
            $table->string('tx_id');
            $table->string('yustx_id');
            $table->integer('yus_fees_percentage'); // Taxes bound the transaction
            $table->integer('user_id')->unsigned();
            $table->string('vendor', 100);
            $table->string('method', 100);
            $table->string('tx_hash')->nullable();
            $table->string('type', 20);
            $table->string('status', 10);

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
        Schema::dropIfExists('transaction_histories');
    }
}
