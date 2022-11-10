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
            $table->id();
            $table->string('item_name');
            $table->unsignedInteger('item_quantity');
            $table->unsignedInteger('unit_price');
            $table->unsignedInteger('total_price');
            $table->bigInteger('vendor_id')->unsigned();
            $table->timestamps();

            $table->foreign('vendor_id')->references('id')->on('vendors');

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
