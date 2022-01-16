<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class college extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colleges')->insert([
            [ 'name' => 'تكنولوجيا المعلومات'],
            [ 'name' => 'الطب'],
            [ 'name' => 'العلوم الصحية'],
            [ 'name' => 'التربية']
        ]);

    }
}
