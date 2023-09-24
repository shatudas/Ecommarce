<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOderDetalisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oder_detalis', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_id')->nullable();
            $table->string('product_id')->nullable();
            $table->string('qty')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('price')->nullable();
            $table->string('total_price')->nullable();
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
        Schema::dropIfExists('oder_detalis');
    }
}
