<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ssn')->unique();
//            $table->integer('ssn',10)->unique();
            $table->string('first_name',20)->nullable();
            $table->string('second_name',20)->nullable();
            $table->string('third_name',20)->nullable();
            $table->string('last_name',20)->nullable();
            $table->string('gender',20)->nullable();
            $table->string('cityOfHome',20)->nullable();
            $table->integer('age')->nullable();
            $table->string('cityOfBorn',20)->nullable();
            $table->string('image')->nullable();
             $table->string('employee')->nullable();
             $table->string('region_cd',20)->nullable();
            $table->string('hay_cd')->nullable();
             $table->string('status_cd')->nullable();
            $table->string('social_status_cd')->nullable();
            $table->string('religion_cd')->nullable();
//            $table->primary('ssn');

            // $table->foreign('secondName')->references('id')->on('informations')->onUpdate('cascade')->onDelete('cascade')->nullable();
            // $table->foreign('MotherName')->references('id')->on('informations')->onUpdate('cascade')->onDelete('cascade')->nullable();

            // $table->foreignId('secondName')->nullable()->constrained('informations')->onUpdate('cascade')->onDelete('cascade');
            // $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informations');
    }
}
