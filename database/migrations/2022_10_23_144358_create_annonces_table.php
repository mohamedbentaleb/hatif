<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->integer('marque_id')->unsigned();
            $table->integer('modele_id')->unsigned();
            $table->integer('ville_id')->unsigned();
            $table->string('title');
            $table->integer('prix');
            $table->mediumText('description');
            $table->integer('status')->unsigned();
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable();
            $table->foreign('marque_id')->references('id')->on("marques");
            $table->foreign('modele_id')->references('id')->on("modeles");
            $table->foreign('ville_id')->references('id')->on("villes");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonces');
    }
}
