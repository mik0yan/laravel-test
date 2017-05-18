<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSerials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('serials', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedinteger('product_id')->comment('所属产品id');
          $table->unsignedinteger('purchase_id')->nullable()->comment('采购单id');
          $table->unsignedinteger('stock_id')->nullable()->comment('库存仓库');
          $table->unsignedinteger('order_id')->nullable()->comment('出货订单id');
          $table->string('serial_no',64)->nullable()->comment('序列号');
          $table->timestamp('product_at')->nullable()->comment('生产日期');
          $table->timestamp('expire_at')->nullable()->comment('承诺质保期');
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
      Schema::drop('serials');
    }
}
