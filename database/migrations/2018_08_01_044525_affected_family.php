<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AffectedFamily extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_head',function( Blueprint $table ){

            $table->increments('id');

            $table->string('head_id',20);

            $table->string('last_name',64);

            $table->string('first_name',64);

            $table->string('middle_name',64);

            $table->string('address',100);

            $table->unsignedInteger('age');

            $table->string('occupation',64);

            $table->string('monly_income');

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
        Schema::dropIfExists('family_head');
    }
}
