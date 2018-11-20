<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role_name');
            $table->string('vendor')->nullable();
            $table->string('vendor_edit_delete')->nullable();
            $table->string('customer')->nullable();
            $table->string('customer_edit_delete')->nullable();
            $table->string('role')->nullable();
            $table->string('role_edit_delete')->nullable();
            $table->string('category')->nullable();
            $table->string('category_edit_delete')->nullable();
            $table->string('subcategory')->nullable();
            $table->string('subcategory_edit_delete')->nullable();
            $table->string('tag')->nullable();
            $table->string('tag_edit_delete')->nullable();
            $table->string('coupon')->nullable();
            $table->string('coupon_edit_delete')->nullable();
            $table->string('orders')->nullable();
            $table->string('orders_edit_delete')->nullable();
            $table->string('products')->nullable();
            $table->string('products_edit_delete')->nullable();
            $table->string('settings')->nullable();
            $table->string('reports')->nullable();
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
        Schema::dropIfExists('roles');
    }
}
