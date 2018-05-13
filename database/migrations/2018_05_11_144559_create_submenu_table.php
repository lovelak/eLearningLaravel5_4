<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('submenu', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name')->nullable();
        //     $table->text('description')->nullable();

        //     $table->string('filename')->nullable();

        //     $table->integer('menu_id')->unsigned();
        //     $table->foreign('menu_id')->references('id')->on('menu');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submenu');
    }
}
