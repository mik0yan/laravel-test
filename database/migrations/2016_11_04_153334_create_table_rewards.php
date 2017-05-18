<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRewards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rewards', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('user_id')->comment('销售员id');
            $table->unsignedtinyinteger('type')->comment('T1:抽佣,T2:返现,T3.绩效');
            $table->unsignedinteger('order_id')->comment('订单id');
            $table->unsignedtinyinteger('status')->comment('T1:pending,T2:approved');
            $table->double('sum')->comment('金额');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rewards');
    }
}
