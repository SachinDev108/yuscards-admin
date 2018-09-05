<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string("vendor",100);
            $table->string("cvv",10);
            $table->string("card_holder",200);
            $table->timestamp("expiration_date");
            $table->string("qr_code",200);
            $table->string("cvn",100);
            $table->string("type",100);
            $table->string("card_number",20);
            $table->string("card_version",30);
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
        Schema::dropIfExists('cards');
    }
}
