<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments('resv_id');
            $table->integer('cust_id')->unsigned();
            $table->integer('cruise_id')->unsigned();
            $table->integer('cabin_id')->unsigned();
            $table->string('cabin_qty',10);
            $table->string('ticket_qty',10);

            $table->foreign('cust_id')
                ->references('cust_id')->on('customer')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('cruise_id')
                ->references('cruise_id')->on('cruise')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('cabin_id')
                ->references('cabin_id')->on('cabin')
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
        Schema::drop('reservation');
    }
}
