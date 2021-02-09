<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Users', function (Blueprint $table) {
            $table->id('UserUID');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Email')->unique();
            $table->string('PhoneNumber');
            $table->string('UserName')->unique();
            $table->string('Password')->nullable();
            $table->string('Status')->nullable();
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
        Schema::dropIfExists('Users');
    }
}
