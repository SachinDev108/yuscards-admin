<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("user_id");
            $table->integer('amount');
            $table->string("status",20);
            $table->string('method');
            $table->string('country')->nullable();
            $table->string('tx_id');
            $table->string('yustx_id');
            $table->string('order_status');
            $table->string('address');
            $table->string('tx_hash');
            $table->string('type');

            $table->string("orderNo",100);
            $table->timestamps();

            $table->foreign("user_id")->references("id")
                  ->on("users")
                  ->onDelete("cascade");
                  $table->engine = "innoDB";
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card_orders');
    }
}
