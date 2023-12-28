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
        Schema::create('flight_usage', function (Blueprint $table) {
            $table->id();
            $table->string('method');
            $table->string('flightNumber');
            $table->string('destination');
            $table->string('Date_Time');
            $table->string('lang');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flight_usage');
    }
};
