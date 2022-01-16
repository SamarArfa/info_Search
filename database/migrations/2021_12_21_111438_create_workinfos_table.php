<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workinfos', function (Blueprint $table) {
            $table->id();
            $table->string('Emp_work')->nullable();
            $table->string('employee_cd')->nullable();
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
        Schema::dropIfExists('workinfos');
    }
}
