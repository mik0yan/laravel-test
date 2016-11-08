<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('client_id')->comment('医院id');
            $table->unsignedinteger('agent_id')->nullable()->comment('客户id');
            $table->unsignedinteger('user_id')->comment('销售员id');
            $table->double('sum')->comment('订单总额');
            $table->double('validsum')->comment('等效金额');
            $table->double('bonus')->comment('返现金额');
            $table->string('comment')->comment('备忘');
            $table->unsignedinteger('status')->comment('S10:招标待授权,S11:招标授权,S2:新建订单,S3:审批订单,S4:备货,S5:发货,S6:完成,S7:取消');
            $table->dateTime('expire')->comment('有效日期');
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
        Schema::drop('orders');
    }
}
