<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('province',32);
            $table->string('city',32);
            $table->unsignedinteger('area_code');
            $table->string('name');
            $table->string('website');
            $table->string('level');
            $table->string('address');
            $table->string('traffic');
            $table->string('clinic');
            $table->string('doctor');
            $table->text('brief');
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
        Schema::drop('hospitals');
    }
}
