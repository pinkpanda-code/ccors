<?php

use Illuminate\Database\Seeder;

class ship_cabin_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ship_cabin')->insert(array(
            array(
                'ship_id' => 1,
                'cabin_id' => 1,
                'cabin_price' => 1299,
                'cabin_total' => 60
            ),
            array(
                'ship_id' => 1,
                'cabin_id' => 2,
                'cabin_price' => 1499,
                'cabin_total' => 30
            ),
            array(
                'ship_id' => 1,
                'cabin_id' => 3,
                'cabin_price' => 1699,
                'cabin_total' => 20
            ),
            array(
                'ship_id' => 1,
                'cabin_id' => 4,
                'cabin_price' => 1899,
                'cabin_total' => 20
            ),
            array(
                'ship_id' => 1,
                'cabin_id' => 5,
                'cabin_price' => 2099,
                'cabin_total' => 20
            ),
            array(
                'ship_id' => 2,
                'cabin_id' => 1,
                'cabin_price' => 1299,
                'cabin_total' => 60
            ),
            array(
                'ship_id' => 2,
                'cabin_id' => 2,
                'cabin_price' => 1399,
                'cabin_total' => 30
            ),
            array(
                'ship_id' => 2,
                'cabin_id' => 3,
                'cabin_price' => 1599,
                'cabin_total' => 20
            ),
            array(
                'ship_id' => 2,
                'cabin_id' => 4,
                'cabin_price' => 1799,
                'cabin_total' => 20
            ),
            array(
                'ship_id' => 2,
                'cabin_id' => 5,
                'cabin_price' => 1999,
                'cabin_total' => 20
            ),
            array(
                'ship_id' => 19,
                'cabin_id' => 1,
                'cabin_price' => 1099,
                'cabin_total' => 60
            ),
            array(
                'ship_id' => 19,
                'cabin_id' => 2,
                'cabin_price' => 1299,
                'cabin_total' => 30
            ),
            array(
                'ship_id' => 19,
                'cabin_id' => 3,
                'cabin_price' => 1499,
                'cabin_total' => 20
            ),
            array(
                'ship_id' => 19,
                'cabin_id' => 4,
                'cabin_price' => 1699,
                'cabin_total' => 20
            ),
            array(
                'ship_id' => 19,
                'cabin_id' => 5,
                'cabin_price' => 1899,
                'cabin_total' => 20
            ),
            array(
                'ship_id' => 5,
                'cabin_id' => 1,
                'cabin_price' => 1099,
                'cabin_total' => 60
            ),
            array(
                'ship_id' => 5,
                'cabin_id' => 2,
                'cabin_price' => 1299,
                'cabin_total' => 30
            ),
            array(
                'ship_id' => 5,
                'cabin_id' => 3,
                'cabin_price' => 1499,
                'cabin_total' => 20
            ),
            array(
                'ship_id' => 5,
                'cabin_id' => 4,
                'cabin_price' => 1699,
                'cabin_total' => 20
            ),
            array(
                'ship_id' => 5,
                'cabin_id' => 5,
                'cabin_price' => 1899,
                'cabin_total' => 20
            ),
            array(
                'ship_id' => 7,
                'cabin_id' => 1,
                'cabin_price' => 1099,
                'cabin_total' => 60
            ),
            array(
                'ship_id' => 7,
                'cabin_id' => 2,
                'cabin_price' => 1299,
                'cabin_total' => 30
            ),
            array(
                'ship_id' => 7,
                'cabin_id' => 3,
                'cabin_price' => 1499,
                'cabin_total' => 20
            ),
            array(
                'ship_id' => 7,
                'cabin_id' => 4,
                'cabin_price' => 1699,
                'cabin_total' => 20
            ),
            array(
                'ship_id' => 7,
                'cabin_id' => 5,
                'cabin_price' => 1899,
                'cabin_total' => 20
            ),

        ));
    }
}
