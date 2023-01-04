<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('email');
            $table->string('password');

            $table->string('namePersonal');
            $table->string('phonePersonal');
            $table->string('gender');

            $table->string('nameBusiness');
            $table->string('phoneBusiness');
            $table->longText('introduceBusiness');
            $table->string('personnelSize');
            $table->string('location');
            $table->string('image');
            $table->string('cover');
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
        Schema::dropIfExists('businesses');
    }
};
