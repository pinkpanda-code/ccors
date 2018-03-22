<?php

use Illuminate\Database\Seeder;

class cruise_line_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cruise_line')->insert(array(
            array(
                'line_id' => 1,
                'line_name' => 'Princess Cruises'
            ),
            array(
                'line_id' => 2,
                'line_name' => 'Cunard Cruises'
            ),
        ));
    }
}
