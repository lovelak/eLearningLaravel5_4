<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');

            $table->text('question')->nullable();
            $table->text('choice1')->nullable();
            $table->text('choice2')->nullable();
            $table->text('choice3')->nullable();
            $table->text('choice4')->nullable();
            $table->char('answer')->nullable();


            $table->integer('unit_id')->unsigned();
            $table->foreign('unit_id')->references('id')->on('units');

            $table->integer('unit_id')->unsigned();
            $table->foreign('unit_id')->references('id')->on('units');

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
        Schema::dropIfExists('tests');
    }
}
