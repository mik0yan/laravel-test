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
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',128)->comment('联系人');
            $table->string('corp',128)->nullable()->comment('公司名称');
            $table->unsignedtinyinteger('level')->comment('等级')->default(1);
            $table->string('registration')->nullable()->comment('注册信息-oss_url');
            $table->string('certification')->nullable()->comment('认证信息-oss_url');
            $table->boolean('approved')->nullable()->comment('注册信息');
            $table->unsignedinteger('approved_id')->nullable()->comment('批准人');
            $table->string('country_code',3)->nullable()->comment('国家代码');
            $table->unsignedinteger('area_code')->nullable()->comment('地区代码');
            $table->string('mobile',64)->nullable()->comment('联系手机');
            $table->string('email',128)->nullable()->comment('联系邮箱');
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
        Schema::drop('vendors');
    }
}
