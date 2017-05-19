<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('name')->comment('供应商目录');
            $table->string('inviceno')->comment('发票编号');
            $table->string('contractno')->comment('合同编号');
            $table->unsignedinteger('transfer_id')->comment('对应的运单信息');
            $table->string('comment')->comment('备忘');
            $table->unsignedtinyinteger('status')->comment('S1:待发货,S2:发货,S3:待收货,S4:完成、S9:异常');
            $table->dateTime('shipdate')->comment('发货日期');
            $table->timestamp('expire_at')->comment('有效期');
            $table->timestamps();
            $table->softDeletes();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('vendors');

    }
}
