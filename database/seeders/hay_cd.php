<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class hay_cd extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hay_cds')->insert([
            [ 'name' => 'الشيخ رضوان'],
            [ 'name' => 'معسكر'],
            [ 'name' => 'شجاعية']
        ]);
    }
}
