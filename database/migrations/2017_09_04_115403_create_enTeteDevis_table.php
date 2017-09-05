<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnTeteDevisTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('enTeteDevis', function(Blueprint $table) {
            $table->increments('id');
            $table->float('valeurTVA');
            $table->string('description');
            $table->date('dateOuverture');
            $table->boolean('devis');
            $table->integer('chantier_id')->unsigned();
            $table->foreign('chantier_id')
            ->references('id')
            ->on('chantiers')
            ->onDelete('restrict')
            ->onUpdate('cascade');
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
        Schema::drop('enTeteDevis');
    }
}
