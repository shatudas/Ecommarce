<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoryInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategory_information', function (Blueprint $table) {
            $table->id();
            $table->string('sl')->nullable();
            $table->string('item_id')->nullable();
            $table->string('category_id')->nullable();
            $table->string('subcategory_name')->nullable();
            $table->string('status')->nullable();
            $table->string('admin_id')->nullable();
            $table->string('subcategory_image')->nullable();
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
        Schema::dropIfExists('subcategory_information');
    }
}
