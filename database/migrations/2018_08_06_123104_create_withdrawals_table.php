<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('amount');
            $table->string('tx_id');
            $table->string('yustx_id');
            $table->integer('user_id')->unsigned();
            $table->string('address');
            $table->string('vendor', 100);
            $table->string('method', 100);
            $table->string('tx_hash')->nullable();
            $table->string('type',20);
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
        Schema::dropIfExists('withdrawals');
    }
}
