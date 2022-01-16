<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class travel_case extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('travel_cases')->insert([
            [ 'name' => 'علاج'],
            [ 'name' => 'سياحة']
        ]);
    }
}
