<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCompany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->bigIncrements('id_company');
            $table->string('name',30);
            $table->string('service_zone',30);
            $table->string('phone',15);
            $table->string('email',30);
            $table->string('address',200);
            $table->float("lat",10,6);
            $table->float("lng",10,6);
            $table->string('start_time',20);
            $table->string('end_time',20);
            $table->boolean('status');        
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
        Schema::dropIfExists('company');
    }
}
