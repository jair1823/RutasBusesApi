<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRoute extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route', function (Blueprint $table) {
            $table->bigIncrements('id_route');
            $table->unsignedBigInteger('id_company');
            $table->foreign('id_company')->references('id_company')->on('company');
            $table->string('number',30);
            $table->string('description',200);
            $table->integer('ticket_cost');
            $table->string('start_time',20);
            $table->string('end_time',20);
            $table->integer('duration');
            $table->boolean('disability_system');

            $table->bigInteger('origin');
            $table->foreign('origin')->references('id_distric')->on('distric');
            $table->bigInteger('destination');
            $table->foreign('destination')->references('id_distric')->on('distric');

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
        Schema::dropIfExists('route');
    }
}
