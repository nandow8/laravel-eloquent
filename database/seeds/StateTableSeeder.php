<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            ['country_id' => '1', 'name' => 'São Paulo', 'initials' => 'SP'],
            ['country_id' => '1', 'name' => 'Minas Gerais', 'initials' => 'MG'],
        ]);
    }
}
