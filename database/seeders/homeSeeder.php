<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class homeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city_of_homes')->insert([
            [ 'name' => 'غزة'],
            [ 'name' => 'رفح'],
            [ 'name' => 'خانيونس'],
            [ 'name' => 'جباليا'],
            [ 'name' => 'دير البلح']
        ]);    }
}
