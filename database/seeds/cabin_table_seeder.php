<?php

use Illuminate\Database\Seeder;

class cabin_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cabin')->insert(array(
            array(
                'cabin_id' => 1,
                'cabin_name' => 'Interior'
            ),
            array(
                'cabin_id' => 2,
                'cabin_name' => 'Oceanview'
            ),
            array(
                'cabin_id' => 3,
                'cabin_name' => 'Balcony'
            ),
            array(
                'cabin_id' => 4,
                'cabin_name' => 'Mini-Suite'
            ),
            array(
                'cabin_id' => 5,
                'cabin_name' => 'Suite'
            )
        ));
    }
}
