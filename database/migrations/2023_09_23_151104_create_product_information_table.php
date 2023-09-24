<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_information', function (Blueprint $table) {
            $table->id();
             $table->string('product_code')->nullable();
             $table->string('product_name')->nullable();
             $table->string('item_id')->nullable();
             $table->string('category_id')->nullable();
             $table->string('sub_category_id')->nullable();
             $table->string('brand_id')->nullable();
             $table->string('purchase_price')->nullable();
             $table->string('sale_price')->nullable();
             $table->string('Discount_price')->nullable();
             $table->string('stock_status')->nullable();
             $table->string('size')->nullable();
             $table->string('color')->nullable();
             $table->longText('short_detalis')->nullable();
             $table->longText('full_detalis')->nullable();
             $table->string('status')->nullable();
             $table->string('quantity')->nullable();
             $table->string('measurement')->nullable();
             $table->string('admin_id')->nullable();
             $table->string('product_image')->nullable();
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
        Schema::dropIfExists('product_information');
    }
}
