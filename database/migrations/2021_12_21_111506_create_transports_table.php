<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_id')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('car_color')->nullable();
            $table->string('manufacture_comp')->nullable();
            $table->integer('license_number')->nullable();
//            $table->unsignedInteger('user_id');
//            $table->foreign('user_id')->references('ssn')->on('infos')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('infos')->onDelete('cascade');

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
        Schema::dropIfExists('transports');
    }
}
