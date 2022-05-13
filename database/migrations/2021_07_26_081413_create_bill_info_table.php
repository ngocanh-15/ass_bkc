<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_info', function (Blueprint $table) {
            $table->Increments('bill_info_id');
            $table->date('date');
            $table->string('name');
            $table->float('totalprice');
            $table->char('phone_buyer',10)->unique();
            $table->string('delivery_address')->nullable();
            $table->string('note');
            $table->string('status');
            $table->char('phone_seller',10)->unique();
            $table->string('seller_address')->nullable();
            $table->integer('user_id')->unsigned();           
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('customer');
            $table->integer('bill_id')->unsigned();
            $table->foreign('bill_id')->references('bill_id')->on('bill');
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
        Schema::dropIfExists('bill_info');
    }
}
