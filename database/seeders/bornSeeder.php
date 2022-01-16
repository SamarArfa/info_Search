<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class bornSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city_of_borns')->insert([
            [ 'name' => 'فلسطين'],
            [ 'name' => 'بلجيكا'],
            [ 'name' => 'امريكا'],
            [ 'name' => 'السعودية']
        ]);    }
}
