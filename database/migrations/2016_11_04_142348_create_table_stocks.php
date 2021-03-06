<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedtinyinteger('type')->comment('类型,T1:海外,T2:海关,T3:常规');
            $table->string('name',64)->comment('仓库名称');
            $table->unsignedinteger('收货人id');
            $table->string('address')->nullable()->comment('地址');
            $table->string('postal_code',16)->nullable()->comment('邮编');
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
        Schema::drop('order_stocks');
    }
}
