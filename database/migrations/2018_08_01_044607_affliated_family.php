<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AffliatedFamily extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_affiliated', function( Blueprint $table ){

            $table->increments('id');

            $table->string('head_id',20);

            $table->string('name',64);

            $table->integer('age');

            $table->string('relation',32);

            $table->string('sex',6);

            $table->string('occupation',64);

            $table->string('health',64);

            $table->string('remarks',64);

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
        Schema::dropIfExists('family_affiliated');
    }
}
