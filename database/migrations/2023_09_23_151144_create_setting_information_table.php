<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_information', function (Blueprint $table) {
             $table->id();
             $table->string('title')->nullable();
             $table->string('email')->nullable();
             $table->string('phone')->nullable();
             $table->string('facebook')->nullable();
             $table->string('twitter')->nullable();
             $table->string('instagram')->nullable();
             $table->string('youtube')->nullable();
             $table->string('favicon')->nullable();
             $table->string('setting_image')->nullable();
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
        Schema::dropIfExists('setting_information');
    }
}
