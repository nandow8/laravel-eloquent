<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyCityTableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_city')->insert([
            ['city_id' => '1', 'company_id' => '1'],
            ['city_id' => '2', 'company_id' => '2'],
        ]);
    }
}
