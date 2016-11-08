<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTokenLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('token_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('user_id');
            $table->rememberToken();
            $table->ipAddress('visitor');
            $table->macAddress('device');
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
        Schema::drop('token_logs');
    }
}
