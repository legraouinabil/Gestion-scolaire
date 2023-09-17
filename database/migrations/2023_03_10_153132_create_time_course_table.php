<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_course', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('formateur_id');
            $table->unsignedBigInteger('group_id');
            $table->time('start_time');
            $table->time('end_time');
            $table->foreign('formateur_id')->references('id')->on('formateurs')->onDelete('cascade');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
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
        Schema::dropIfExists('time_course');
    }
}
