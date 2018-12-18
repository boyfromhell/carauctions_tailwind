<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('car_brand');
            $table->string('car_model');
            $table->string('car_type');
            $table->string('car_buildyear');
            $table->string('car_km');
            $table->string('car_VIN');
            $table->string('car_motor');
            $table->string('car_cylinder');
            $table->string('car_pk');
            $table->string('car_torque');
            $table->string('car_transmission');
            $table->string('car_colour_external');
            $table->string('car_colour_interior');
            $table->string('car_size_length');
            $table->string('car_size_height');
            $table->string('car_size_width');          
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
        Schema::dropIfExists('cars');
    }
}
