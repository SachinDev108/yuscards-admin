<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->increments('id');
            $table->string("ticker_symbol",20);
            $table->unsignedInteger("user_id");
            $table->string("address",200);
            $table->string("label",100);
            $table->string("balance",100);
            $table->integer("isActive")->default(1);
            $table->foreign("user_id")->references("id")
                  ->on("users")
                  ->onDelete("cascade");

            $table->timestamps();

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
        Schema::dropIfExists('wallets');
    }
}
