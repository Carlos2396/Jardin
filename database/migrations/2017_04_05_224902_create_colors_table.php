<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rgb');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('color_specie', function (Blueprint $table) {
            $table->integer('color_id')->unsigned();
            $table->integer('specie_id')->unsigned();
            $table->integer('quantity');
            $table->timestamps();

            $table->primary(['color_id','specie_id']);
            $table->foreign('color_id')->references('id')->on('colors')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('specie_id')->references('id')->on('species')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colors');
        Schema::dropIfExists('color_specie');
    }
}
