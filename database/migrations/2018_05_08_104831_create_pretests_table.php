<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePretestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pretests', function (Blueprint $table) {
            $table->increments('id');
            $table->text('question')->nullable();
            $table->text('choice1')->nullable();
            $table->text('choice2')->nullable();
            $table->text('choice3')->nullable();
            $table->text('choice4')->nullable();
            $table->char('answer')->nullable();


//            $table->dateTime('start_test')->nullable(); //กำหนดวันเริ่มทำแบบทดสอบ

//            $table->integer('user_id')->unsigned();
//            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('pretests');
    }
}
