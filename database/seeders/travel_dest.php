<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class travel_dest extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('travel_dests')->insert([
            [ 'name' => 'مصر'],
            [ 'name' => 'تركيا']
        ]);
    }
}
