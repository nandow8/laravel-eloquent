<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['state_id' => '1', 'name' => 'Suzano'],
            ['state_id' => '1', 'name' => 'Mogi das Cruzes'],
            ['state_id' => '2', 'name' => 'Uberaba'],
        ]);
    }
}
