<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lot_no',15)->comment("批次号:日期+序号前4位");
            $table->unsignedinteger('product_id')->comment('产品id');
            $table->unsignedinteger('quantity')->comment('批次数量');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lots');
    }
}
