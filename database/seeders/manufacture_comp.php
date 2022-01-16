<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class manufacture_comp extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufacture_comps')->insert([
            [ 'name' => 'TOYTO'],
            [ 'name' => 'مرسيدس']
        ]);
    }
}
