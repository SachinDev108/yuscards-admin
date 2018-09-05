<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 191);
            $table->string('last_name', 191);
			$table->string('name');
            $table->string('email', 191)->unique();
			$table->string('country',100)->nullable();
            $table->string('password', 191)->nullable();
			$table->string('avatar')->default('avatar.png');
			$table->string('uuid',100)->unique();
			$table->string('refcode')->unique();
			$table->string('activation_token');
			$table->boolean('active')->default(false);
            $table->boolean('status')->default(1);
            $table->string('confirmation_code', 191)->nullable();
            $table->boolean('confirmed')->default(0);
            $table->boolean('is_term_accept')->default(0)->comment(' 0 = not accepted,1 = accepted');
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned()->nullable();
			$table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
        Schema::drop('users');
    }
}
