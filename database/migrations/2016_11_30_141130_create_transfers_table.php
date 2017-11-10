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
            $table->unsignedtinyinteger('catalog')->comment('T1:入库,T2:移库,T3:发货');
            $table->unsignedinteger('order_id')->nullable()->comment('出货运输相关的订单');
            $table->unsignedinteger('to_stock_id')->comment('出库仓库id');
            $table->unsignedinteger('from_stock_id')->comment('入库仓库id');
            $table->string('track_id')->comment('物流单号');
            $table->unsignedinteger('user_id')->comment('操作人员');
            $table->string('comment')->comment('备注，用于说明是否发货完')->nullable();
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
