<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmergency extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emergencies',function( Blueprint $table ){

            $table->increments('id');

            $table->string('barangay_id',20);

            $table->string('center_id',20)->nullable();

            $table->string('disaster_id',20);

            $table->string('head_id',20);

            $table->string('rent_price',20)->nullable();

            $table->string('house_condition',20);

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
        Schema::dropIfExists('emergencies');
    }
}
