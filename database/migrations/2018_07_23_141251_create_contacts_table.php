<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("user_id")->nullable(); // Can be null, if the user who wants to contact us is not logged in
            $table->string("email",100);
            $table->string("subject",100);
            $table->string("support_id",100);
            $table->text("message");
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
        Schema::dropIfExists('contacts');
    }
}
