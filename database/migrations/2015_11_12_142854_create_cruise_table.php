<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCruiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruise', function (Blueprint $table) {
            $table->increments('cruise_id');
            $table->integer('ship_id')->unsigned();
            $table->date('start_date');
            $table->integer('duration');
            $table->integer('dest_id')->unsigned();
            $table->integer('departure_port')->unsigned();
            $table->string('cruise_status',20);


            $table->foreign('ship_id')
                ->references('ship_id')->on('ship')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('dest_id')
                ->references('dest_id')->on('destination')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('departure_port')
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
        Schema::drop('cruise');
    }
}
