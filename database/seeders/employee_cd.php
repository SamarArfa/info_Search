<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class employee_cd extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_cds')->insert([
            [ 'name' =>'طبيب'],
            [ 'name' => 'مبرمج']
        ]);
    }
}
