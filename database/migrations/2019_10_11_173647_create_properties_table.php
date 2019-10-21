<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('street_address');
            $table->string('city');
            //$table->string('state');
            $table->string('zip');
            $table->float('price');
            $table->float('bedrooms');
            $table->float('bathrooms');
            $table->integer('square_feet');
            $table->integer('lot_size');
            $table->integer('year_built');
            $table->string('type');
            $table->string('sub_type');
            $table->string('listing_status');
            $table->integer('listing_number');
            $table->string('county');
            $table->string('neighborhood');
            $table->string('fireplace');
            $table->integer('stories');
            $table->integer('garage');
            $table->integer('parking_space');
            $table->string('utilities');
            $table->text('details');
            $table->integer('user_id');
            $table->boolean('featured')->nullable();
            $table->timestamps();
            // agent_id name phone_number broker_id
            // broker_id name phone_number
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
