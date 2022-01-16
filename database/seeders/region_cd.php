<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class region_cd extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('region_cds')->insert([
            [ 'name' => 'غزة'],
            [ 'name' => 'خانيوس']

        ]);
    }
}
