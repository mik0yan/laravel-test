<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('order_id')->nullable()->comment('出货运输相关的订单');
            $table->unsignedinteger('from_stock_id')->nullable()->comment('出库库房');
            $table->unsignedinteger('to_stock_id')->nullable()->comment('入库库房');
            $table->string('track_id')->nullable()->comment('物流单号');
            $table->unsignedinteger('user_id')->comment('操作人员');
            $table->unsignedtinyinteger('status')->comment('S1:待发货,S2:发货,S3:待收货,S4:完成、S9:异常');
            $table->unsignedtinyinteger('type')->comment('T1:入库,T2:移库,T3:发货,T4损耗,T5返修入库,T6,返修出库');
            $table->string('comments')->comment('运单备注信息');
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
        Schema::drop('transfers');
    }
}
