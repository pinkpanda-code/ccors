<?php

use Illuminate\Database\Seeder;

class cruise_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cruise')->insert(array(
            array(
                'ship_id' => '1',
                'start_date' => '2016-03-12',
                'duration' => '6',
                'dest_id' => '2',
                'departure_port' => '34', //Fermantle, Australia
                'cruise_status' => 'Open for booking'
            ),
            array(
                'ship_id' => '2',
                'start_date' => '2016-04-10',
                'duration' => '12',
                'dest_id' => '3',
                'departure_port' => '52', //Kobe, Japan 52
                'cruise_status' => 'Open for booking'
            ),
            array(
                'ship_id' => '19',
                'start_date' => '2016-05-08',
                'duration' => '18',
                'dest_id' => '8',
                'departure_port' => '57', // LA, California 57
                'cruise_status' => 'Open for booking'
            ),
            array(
                'ship_id' => '5',
                'start_date' => '2016-06-18',
                'duration' => '10',
                'dest_id' => '2',
                'departure_port' => '66', // Tokyo, Japan 66
                'cruise_status' => 'Open for booking'
            ),
            array(
                'ship_id' => '7',
                'start_date' => '2016-07-29',
                'duration' => '18',
                'dest_id' => '3',
                'departure_port' => '8', // Auckland, New Zealand 8
                'cruise_status' => 'Open for booking'
            ),
        ));
    }
}
