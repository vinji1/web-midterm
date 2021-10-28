<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoholWeatherApiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bohol_weather_api', function (Blueprint $table) {
            $table->id();
            $table->string('town');
            $table->string('temperature');
            $table->string('humidity');
            $table->string('weather_status');
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
        Schema::dropIfExists('bohol_weather_api');
    }
}
