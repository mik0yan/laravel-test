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
            // $table->string('ordno')->comment('订单号');
            $table->double('sum')->comment('订单总额(含)')->default(0);
            $table->double('validsum')->comment('等效金额')->default(0);
            $table->double('addsum')->comment('延保金')->default(0);
            $table->double('bonus')->comment('返现金额')->default(0);
            $table->unsignedtinyinteger('warranty')->comment('质保期(年)');
            $table->double('performance')->comment('绩效奖金');
            $table->string('comment')->comment('备忘');
            $table->unsignedtinyinteger('status')->comment('S10:待授权,S11:授权,S12:授权拒绝,S1,暂存,S2:新建,S3:会签,S4:待签章,S5:已签章,S6:备货,S7:发货,S8:收货,S9:完成,S0:取消');
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
