<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class religion_cd extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('religion_cds')->insert([
            [ 'name' => 'مسلم/ة'],
            [ 'name' => 'مسيحية']
        ]);
    }
}
