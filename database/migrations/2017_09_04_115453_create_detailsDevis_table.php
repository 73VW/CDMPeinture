<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailsDevis', function (Blueprint $table) {
            $table->float('prixUnitaire');
            $table->float('quantite');
            $table->string('unite');
            $table->string('texte');

            $table->integer('positionsDevis_id')->unsigned();
            $table->foreign('positionsDevis_id')
            ->references('id')
            ->on('positionsDevis')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->integer('enTeteDevis_id')->unsigned();
            $table->foreign('enTeteDevis_id')
            ->references('id')
            ->on('enTeteDevis')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->integer('produits_id')->unsigned();
            $table->foreign('produits_id')
            ->references('id')
            ->on('produits');
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
        Schema::drop('detailsDevis');
    }
}
