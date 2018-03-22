<?php

use Illuminate\Database\Seeder;

class cruise_itinerary_port_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cruise_itinerary_port')->insert(array(
            array(
                'cruise_id' => 1,
                'port_id' => 34
            ),
            array(
                'cruise_id' => 1,
                'port_id' => 1
            ),
            array(
                'cruise_id' => 1,
                'port_id' => 2
            ),
            array(
                'cruise_id' => 1,
                'port_id' => 5
            ),
            array(
                'cruise_id' => 1,
                'port_id' => 26
            ),
            array(
                'cruise_id' => 1,
                'port_id' => 38
            ),
            array(
                'cruise_id' => 1,
                'port_id' => 59 //all cruise_id 1, australia
            ),
            array(
                'cruise_id' => 2,
                'port_id' => 52
            ),
            array(
                'cruise_id' => 2,
                'port_id' => 59
            ),
            array(
                'cruise_id' => 2,
                'port_id' => 17
            ),
            array(
                'cruise_id' => 2,
                'port_id' => 48
            ),
            array(
                'cruise_id' => 2,
                'port_id' => 66
            ),
            array(
                'cruise_id' => 2,
                'port_id' => 70
            ),
            array(
                'cruise_id' => 2,
                'port_id' => 4
            ),
            array(
                'cruise_id' => 2,
                'port_id' => 9
            ),
            array(
                'cruise_id' => 2,
                'port_id' => 14 //all cruise_id 2, japan
            ),
            array(
                'cruise_id' => 3,
                'port_id' => 57
            ),
            array(
                'cruise_id' => 3,
                'port_id' => 58
            ),
            array(
                'cruise_id' => 3,
                'port_id' => 43
            ),
            array(
                'cruise_id' => 3,
                'port_id' => 69
            ),
            array(
                'cruise_id' => 3,
                'port_id' => 3
            ),
            array(
                'cruise_id' => 3,
                'port_id' => 39 //all cruise_id 3, hawaii
            ),
            array(
                'cruise_id' => 4,
                'port_id' => 66
            ),
            array(
                'cruise_id' => 4,
                'port_id' => 70
            ),
            array(
                'cruise_id' => 4,
                'port_id' => 52
            ),
            array(
                'cruise_id' => 4,
                'port_id' => 47
            ),
            array(
                'cruise_id' => 4,
                'port_id' => 14
            ),
            array(
                'cruise_id' => 4,
                'port_id' => 48 //all cruise_id 4
            ),
            array(
                'cruise_id' => 5,
                'port_id' => 8
            ),
            array(
                'cruise_id' => 5,
                'port_id' => 3
            ),
            array(
                'cruise_id' => 5,
                'port_id' => 29
            ),
            array(
                'cruise_id' => 5,
                'port_id' => 39
            ),
            array(
                'cruise_id' => 5,
                'port_id' => 69
            ),
            array(
                'cruise_id' => 5,
                'port_id' => 65
            ),
            array(
                'cruise_id' => 5,
                'port_id' => 1
            ),
            array(
                'cruise_id' => 5,
                'port_id' => 26 //all cruise_id 5
            ),

        ));
    }
}
