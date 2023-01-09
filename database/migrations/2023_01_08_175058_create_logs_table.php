<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up():void
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string('flight_id');
            $table->dateTime('departure_time');
            $table->bigInteger('depairport');
            $table->dateTime('arrival_time');
            $table->bigInteger('arrairport');
            $table->string('timezone');
            $table->integer('seats');
            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('logs');
    }
};