<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('produits', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->float('prixUnitaire');
            $table->integer('stock')->unsigned();
            $table->string('unite');
            $table->boolean('produit');

            $table->integer('contact_id')->unsigned()->default(0);
            $table->foreign('contact_id')
            ->references('id')
            ->on('contacts')
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
        Schema::drop('produits');
    }
}
