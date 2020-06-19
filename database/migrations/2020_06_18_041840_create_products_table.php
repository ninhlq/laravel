<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('productCode');
            $table->string('product_name');
            $table->string('product_line');
            $table->string('product_scale');
            $table->string('product_vendor');
            $table->string('product_description');
            $table->string('quantity_stock');
            $table->string('buy_price');
            $table->string('MSRP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
