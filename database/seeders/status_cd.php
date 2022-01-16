<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class status_cd extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_cds')->insert([
            [ 'name' => 'سليم'],
            [ 'name' => 'مريض']
        ]);
    }
}
