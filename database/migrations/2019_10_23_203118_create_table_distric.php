<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDistric extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distric', function (Blueprint $table) {
            $table->bigInteger('id_distric');
            $table->primary('id_distric');

            $table->bigInteger('id_canton');
            $table->foreign('id_canton')->references('id_canton')->on('canton');
            
            $table->string('name',30);

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
        Schema::dropIfExists('distric');
    }
}
