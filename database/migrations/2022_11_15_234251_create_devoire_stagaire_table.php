<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevoireStagaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devoire_stagaire', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stagaire_id');
            $table->foreign('stagaire_id')->references('id')->on('stagaires')->onDelete('cascade');;

            $table->unsignedBigInteger('devoire_id');
            $table->foreign('devoire_id')->references('id')->on('devoires')->onDelete('cascade');
          
            $table->string('file_reponse')->nullable();
     
            $table->integer('note')->nullable();
            $table->enum('status' , ['en attend' , 'reponse envoyé'])->default('en attend');
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
        Schema::dropIfExists('devoire_stagaire');
    }
}
