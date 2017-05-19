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
          $table->unsignedinteger('purchase_id')->comment('采购单id')->nullable();
          $table->unsignedinteger('order_id')->comment('出货订单id')->nullable();
          $table->unsignedinteger('stock_id')->comment('所属仓库id')->nullable();
          $table->string('serial_no',64)->comment('序列号');
          $table->string('lot_no',64)->nullable()->comment('批号');
          $table->timestamp('product_at')->comment('生产日期')->nullable();
          $table->timestamp('expire_at')->comment('过期日期')->nullable();
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
