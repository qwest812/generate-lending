<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLendingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lendings', function (Blueprint $table) {
            $table->increments('id');
            $table->text('banner');
            $table->string('h1');
            $table->string('title');
            $table->text('description')->null();
            $table->text('keywords');
            $table->integer('first_price');
            $table->integer('second_price');
            $table->text('order_description');
            $table->text('order_delivery');
            $table->string('background_color');
            $table->string('main_color');
            $table->string('local_url');


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
        Schema::dropIfExists('lendings');
    }
}
