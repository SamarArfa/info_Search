<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class car_color extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_colors')->insert([
            [ 'name' => 'احمر'],
            [ 'name' => 'ابيض']
        ]);
    }
}
