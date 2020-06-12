<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Client extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->string('clientid')->unique();
            $table->string('clientname');
            $table->string('email');
            $table->string('National id')->unique();
            $table->string('password');
            $table->string('county');

           
    });}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema ::drop('client');
}
    }

   