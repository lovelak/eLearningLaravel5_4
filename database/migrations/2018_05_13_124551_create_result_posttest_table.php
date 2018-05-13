<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultPosttestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_posttest', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('choice')->nullable();
            $table->integer('posttest_id')->nullable();

            // $table->integer('posttest_id')->unsigned();
            // $table->foreign('posttest_id')->references('id')->on('posttests');
            
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('result_posttest');
    }
}
