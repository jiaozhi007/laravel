<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id()->comment('股票代码');
            $table->string('stock_name', 50)->comment('股票名称');
            $table->unsignedTinyInteger('total')->default(0)->index('total')->comment('研报数');
            $table->unsignedInteger('aim_price_t')->default(0)->comment('目标价（高）单位：分');
            $table->unsignedInteger('aim_price_l')->default(0)->comment('目标价（低）单位：分');
            $table->date('update_time')->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
