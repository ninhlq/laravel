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
            $table->string('productName');
            $table->string('productLine');
            $table->string('productScale');
            $table->string('productVendor');
            $table->string('productDescription');
            $table->string('quantityStock');
            $table->string('buyPrice');
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
