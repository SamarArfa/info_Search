<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class social_status_cd extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_status_cds')->insert([
            [ 'name' => 'اعزب'],
            [ 'name' => 'متزوج/ة'],
            [ 'name' => 'ارملة'],
            [ 'name' => 'مطلقة']
        ]);
    }
}
