<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->Increments('product_id');
            $table->string('name');
            $table->string('image',250);
            $table->float('unit_price');
            $table->integer('quantity');
            $table->string('status');
            $table->date('date');
            $table->integer('user_id')->unsigned();           
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->integer('categories_id')->unsigned();           
            $table->foreign('categories_id')->references('categories_id')->on('categories');
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
        Schema::dropIfExists('product');
    }
}
