<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     * This transaction table is only for internal transactions 
     * If a Yus user wants to send money to another yus user
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('from_address',200)->nullable();
            $table->string('to_address',200)->nullable();
            $table->string('amount',100);
            $table->integer('receiver_id')->unsigned()->default(null);
            $table->integer('sender_id')->unsigned()->default(null);
            $table->string('yustx_id',100);
            $table->string('vendor',100);
            $table->integer('yus_fees_percentage'); // Taxes bound the transaction
            $table->string('method',100);
            $table->string('type',100);
            $table->string('status',10);

            $table->foreign('receiver_id')->references('id')
                  ->on('users')->onDelete('cascade');

            $table->foreign('sender_id')->references('id')
                  ->on('users')->onDelete('cascade');

            $table->timestamps();
            $table->engine = 'innoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
