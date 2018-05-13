<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_test', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('choice')->nullable();
            $table->integer('test_id')->nullable();
            $table->integer('unit_id')->nullable();

            // $table->integer('pretest_id')->unsigned();
            // $table->foreign('pretest_id')->references('id')->on('pretests');
            
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
        Schema::dropIfExists('result_test');
    }
}
