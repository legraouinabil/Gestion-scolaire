<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulStagaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modul_stagaire', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stagaire_id');
            $table->foreign('stagaire_id')->references('id')->on('stagaires')->onDelete('cascade');
            $table->unsignedBigInteger('modul_id');
            $table->foreign('modul_id')->references('id')->on('moduls')->onDelete('cascade');
            $table->integer('note1')->nullable();
            $table->integer('note2')->nullable();
            $table->integer('efm')->nullable();
            $table->integer('notefinal')->nullable();
        
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
        Schema::dropIfExists('modul_stagaire');
    }
}
