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
          $table->unsignedinteger('stock_pid')->comment('所属仓库库存id');
          $table->string('serial_no',64)->comment('序列号');
          $table->string('lot_no',64)->nullable()->comment('批号');
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
