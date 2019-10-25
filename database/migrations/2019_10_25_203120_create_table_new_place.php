<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNewPlace extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_place', function (Blueprint $table) {
            $table->bigIncrements('id_new_place');

            $table->unsignedBigInteger('id_point');
            $table->foreign('id_point')->references('id_point')->on('point');
            $table->string('name',50);
            $table->string('description',250);
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
        Schema::dropIfExists('new_place');
    }
}
