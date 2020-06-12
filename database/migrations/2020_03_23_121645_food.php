<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Food extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('food', function (Blueprint $table) {

            $table->string('clientid');

           
    });}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema ::drop('food');
}
    }

   