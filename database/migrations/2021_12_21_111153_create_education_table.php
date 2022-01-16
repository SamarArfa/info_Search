<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('university')->nullable();;
            $table->string('college')->nullable();;
            $table->string('specialization')->nullable();;
            $table->string('qualification')->nullable();;
            $table->double('university_avg')->nullable();;
//            $table->unsignedInteger('user_id');
//            $table->foreign('user_id')->references('ssn')->on('infos')->onDelete('cascade');
//            $table->foreignId('user_id')->constrained();

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('infos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education');
    }
}
