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
        Schema::create('submitteds', function (Blueprint $table) {
            $table->increments('id');

            $table->string('jobid');
            $table->string('appid');
            $table->string('businessid');
            
            $table->string('edu');
            $table->string('exp');
            $table->string('skill');
            $table->string('obj');

            $table->string('status');
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
        Schema::dropIfExists('submitteds');
    }
};
