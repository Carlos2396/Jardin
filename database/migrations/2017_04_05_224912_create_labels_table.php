<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('label_specie', function (Blueprint $table) {
            $table->integer('label_id')->unsigned();
            $table->integer('specie_id')->unsigned();
            $table->timestamps();

            $table->primary(['label_id','specie_id']);
            $table->foreign('label_id')->references('id')->on('labels')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('labels');
        Schema::dropIfExists('label_specie');
    }
}
