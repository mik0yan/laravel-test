<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('catalog',64)->comment('产品分类');
            $table->boolean('core')->comment('是否为核心物料');
            $table->string('name',32)->comment('产品型号');
            $table->string('desc',32)->comment('产品描述');
            $table->string('certification')->nullable()->comment('产品认证信息-oss_url');
            $table->boolean('approved')->nullable()->comment('注册信息');
            $table->unsignedinteger('approved_id')->nullable()->comment('批准人');
            $table->boolean('license')->comment('销售许可证,false的只能被查询不能添加进订单');
            $table->double('cost')->comment('产品成本');
            $table->double('price1')->comment('经销商价');
            $table->double('price2')->comment('总代价');
            $table->double('price3')->comment('底价');
            $table->double('price4')->comment('市场价');
            $table->double('bonus')->comment('返现奖励');
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
        Schema::drop('products');
    }
}
