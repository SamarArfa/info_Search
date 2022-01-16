<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class crossing extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crossings')->insert([
            [ 'name' => 'رفح'],
            [ 'name' => 'ايرز']
        ]);
    }
}
