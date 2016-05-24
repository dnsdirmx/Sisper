<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependeciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependecias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Descripcion');
            $table->integer('dominio_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('dominio_id')->references('id')->on('dominios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dependecias');
    }
}
