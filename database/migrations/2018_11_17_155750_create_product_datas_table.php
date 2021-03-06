<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_id');
            $table->string('regular_price')->nullable();
            $table->string('sales_price')->nullable();
            $table->string('sku')->nullable();
            $table->string('stock_quantity')->nullable();
            $table->string('low_stock')->nullable();
            $table->string('weight')->nullable();
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('shipping_type')->nullable();
            $table->string('shipping_amount')->nullable();
            $table->string('hot_product')->nullable();
            $table->string('review')->nullable();
            $table->string('new_product')->nullable();
            $table->string('recommended')->nullable();
            $table->string('featured')->nullable();
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
        Schema::dropIfExists('product_datas');
    }
}
