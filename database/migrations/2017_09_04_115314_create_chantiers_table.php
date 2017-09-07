<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChantiersTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('chantiers', function(Blueprint $table) {
            $table->increments('id');
            $table->string('rue');
            $table->integer('numero');
            $table->string('codePostal');
            $table->string('ville');
            $table->string('description');
            $table->boolean('ouvert')->default(true);

            $table->integer('contact_id')->unsigned();
            $table->foreign('contact_id')
            ->references('id')
            ->on('contacts')
            ->onDelete('cascade')
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
        Schema::drop('chantiers');
    }
}
