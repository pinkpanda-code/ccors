<?php

use Illuminate\Database\Seeder;

class destination_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destination')->insert(array(
            array(
                'dest_id' => 1,
                'dest_name' => 'Alaska'
            ),
            array(
                'dest_id' => 2,
                'dest_name' => 'Asia & Africa'
            ),
            array(
                'dest_id' => 3,
                'dest_name' => 'Australia & New Zealand'
            ),
            array(
                'dest_id' => 4,
                'dest_name' => 'California & Pacific Coastals'
            ),
            array(
                'dest_id' => 5,
                'dest_name' => 'Canada & New England'
            ),
            array(
                'dest_id' => 6,
                'dest_name' => 'Caribbean'
            ),
            array(
                'dest_id' => 7,
                'dest_name' => 'Europe'
            ),
            array(
                'dest_id' => 8,
                'dest_name' => 'Hawaii'
            ),
            array(
                'dest_id' => 9,
                'dest_name' => 'Japan'
            ),
            array(
                'dest_id' => 10,
                'dest_name' => 'Mexico'
            ),
            array(
                'dest_id' => 11,
                'dest_name' => 'Panama Canal'
            ),
            array(
                'dest_id' => 12,
                'dest_name' => 'South America'
            )
        ));
    }
}
