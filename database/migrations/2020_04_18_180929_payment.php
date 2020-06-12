<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Payment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->string('paymentid')->primarykey();
            $table->string('clientid');
            $table->string('foodname');
            $table->string('foodid');
            $table->string('roomname');
            $table->string('roomid');
            $table->string('dateofpayment');
            $table->string('status');
            
           
    });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema ::drop('payment');
    }
}

