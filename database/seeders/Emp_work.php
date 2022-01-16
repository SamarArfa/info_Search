<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Emp_work extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('emp_works')->insert([
            [ 'name' => 'غزة'],
            [ 'name' => 'نصر']
        ]);
    }
}
