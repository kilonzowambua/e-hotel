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
            $table->int('paymentid')->primarykey()->increment();
            $table->string('clientid');
            $table->int('foodamount');
            $table->int('lentamount');
            $table->date('dateofpayment');
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
