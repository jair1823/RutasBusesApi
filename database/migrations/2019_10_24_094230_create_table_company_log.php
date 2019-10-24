<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCompanyLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_log', function (Blueprint $table) {
            $table->bigIncrements('id_company_log');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->unsignedBigInteger('id_company');
            $table->foreign('id_company')->references('id_company')->on('company');
            $table->string('description',200);
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
        Schema::dropIfExists('company_log');
    }

}
