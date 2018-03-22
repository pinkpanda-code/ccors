<?php

use Illuminate\Database\Seeder;

class ship_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ship')->insert(array(
            array(
                'ship_id' => 1,
                'ship_name' => 'Caribbean Princess',
                'line_id' => 1
            ),
            array(
                'ship_id' => 2,
                'ship_name' => 'Coral Princess',
                'line_id' => 1
            ),
            array(
                'ship_id' => 3,
                'ship_name' => 'Crown Princess',
                'line_id' => 1
            ),
            array(
                'ship_id' => 4,
                'ship_name' => 'Dawn Princess',
                'line_id' => 1
            ),
            array(
                'ship_id' => 5,
                'ship_name' => 'Diamond Princess',
                'line_id' => 1
            ),
            array(
                'ship_id' => 6,
                'ship_name' => 'Emerald Princess',
                'line_id' => 1
            ),
            array(
                'ship_id' => 7,
                'ship_name' => 'Golden Princess',
                'line_id' => 1
            ),
            array(
                'ship_id' => 8,
                'ship_name' => 'Grand Princess',
                'line_id' => 1
            ),
            array(
                'ship_id' => 9,
                'ship_name' => 'Island Princess',
                'line_id' => 1
            ),
            array(
                'ship_id' => 10,
                'ship_name' => 'Ocean Princess',
                'line_id' => 1
            ),
            array(
                'ship_id' => 11,
                'ship_name' => 'Pacific Princess',
                'line_id' => 1
            ),
            array(
                'ship_id' => 12,
                'ship_name' => 'Regal Princess',
                'line_id' => 1
            ),
            array(
                'ship_id' => 13,
                'ship_name' => 'Royal Princess',
                'line_id' => 1
            ),
            array(
                'ship_id' => 14,
                'ship_name' => 'Ruby Princess',
                'line_id' => 1
            ),
            array(
                'ship_id' => 15,
                'ship_name' => 'Sapphire Princess',
                'line_id' => 1
            ),
            array(
                'ship_id' => 16,
                'ship_name' => 'Sea Princess',
                'line_id' => 1
            ),
            array(
                'ship_id' => 17,
                'ship_name' => 'Star Princess',
                'line_id' => 1
            ),
            array(
                'ship_id' => 18,
                'ship_name' => 'Sun Princess',
                'line_id' => 1
            ),
            array(
                'ship_id' => 19,
                'ship_name' => 'Queen Elizabeth',
                'line_id' => 2
            ),
            array(
                'ship_id' => 20,
                'ship_name' => 'Queen Mary 2',
                'line_id' => 2
            ),
            array(
                'ship_id' => 21,
                'ship_name' => 'Queen Victoria',
                'line_id' => 2
            )
        ));
    }
}
