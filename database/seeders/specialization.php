<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class specialization extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specializations')->insert([
            [ 'name' => 'تطوير برمجيات'],
            [ 'name' => 'رياضيات'],
            [ 'name' => 'علم حاسوب'],
            [ 'name' => 'هندسة حاسوب']
        ]);
    }
}
