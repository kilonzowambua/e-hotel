<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orderfood extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderfood', function (Blueprint $table) {
            $table->string('orderid')->primarykey();
           $table->string('foodid');
            $table->string('foodname');
            $table->string('quantity');
            $table->string('clientid');
            
            
           
    });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
