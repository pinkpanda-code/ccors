<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCruiseItineraryPortTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruise_itinerary_port', function (Blueprint $table) {
            $table->integer('cruise_id')->unsigned();
            $table->integer('port_id')->unsigned();

            $table->foreign('cruise_id')
                ->references('cruise_id')->on('cruise')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('port_id')
                ->references('port_id')->on('port')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cruise_itinerary_port');
    }
}
