<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionsDevisTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('positionsDevis', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('position');
            $table->string('texte');

            $table->integer('enTeteDevis_id')->unsigned();
            $table->foreign('enTeteDevis_id')
            ->references('id')
            ->on('enTeteDevis')
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
        Schema::drop('positionsDevis');
    }
}
