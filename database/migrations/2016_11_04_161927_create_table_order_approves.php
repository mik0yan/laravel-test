<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrderApproves extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_approves', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('approver_id')->comment('批准人id');
            $table->unsignedinteger('order_id');
            $table->unsignedtinyinteger('type')->comment('T1:价格审计,T2:售后条款,T3:备货审批,T4:发货审批,T5:关闭审批,T6:授权审批,T9:赊销');
            $table->unsignedtinyinteger('status')->comment('S1:pending,S2:refuse,S3:approver');
            $table->string('memo')->comment('备忘');
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
        Schema::drop('order_approves');
    }
}
