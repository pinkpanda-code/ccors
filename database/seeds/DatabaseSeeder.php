<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(cruise_line_table_seeder::class);
        $this->call(cabin_table_seeder::class);
        $this->call(ship_table_seeder::class);
        $this->call(ship_cabin_table_seeder::class);
        $this->call(destination_table_seeder::class);
        $this->call(port_table_seeder::class);
        $this->call(cruise_table_seeder::class);
        $this->call(cruise_itinerary_port_table_seeder::class);

        Model::reguard();
    }
}
