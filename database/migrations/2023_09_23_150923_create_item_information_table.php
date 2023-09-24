<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_information', function (Blueprint $table) {
            $table->id();
            $table->integer('sl')->nullable();
            $table->string('item_name')->nullable();
            $table->string('status')->nullable();
            $table->longText('item_image')->nullable();
            $table->string('admin_id')->nullable(); 
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
        Schema::dropIfExists('item_information');
    }
}
