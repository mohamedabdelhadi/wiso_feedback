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
        Schema::create('ksnations', function (Blueprint $table) {
            $table->id('n_id');
            $table->enum('expressions',["Happy","Neutral","Surprise","Disgust","Angry","Sad","Fear"]);
            $table->double('age',[8,45]);
            $table->enum('gender',["Male","Female"]);
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
        Schema::dropIfExists('ksnations');
    }
};
