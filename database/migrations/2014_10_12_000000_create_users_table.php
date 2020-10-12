<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('password',500);
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('token',500)->nullable();
            $table->string('address');
            $table->string('role');
            $table->string('city');
            $table->string('zip_code');
            $table->string('bio')->nullable();
            $table->string('code')->nullable();
            $table->string('experties')->nullable();
            $table->string('status');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
