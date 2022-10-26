<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiches', function (Blueprint $table) {
            $table->id();   
            $table->integer('marque_id')->unsigned();
            $table->integer('modele_id')->unsigned(); 
            $table->integer('prix');
            $table->mediumText('technologie');
            $table->string('cpu');
            $table->string('gpu');
            $table->string('camera');
            $table->string('wifi');
            $table->integer('status')->unsigned();
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable();
            $table->foreign('marque_id')->references('id')->on("marques");
            $table->foreign('modele_id')->references('id')->on("modeles");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiches');
    }
}
