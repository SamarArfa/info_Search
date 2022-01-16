<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class university extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universities')->insert([
            [ 'name' => 'الجامعة الاسلامية'],
            [ 'name' => 'جامعة الازهر'],
            [ 'name' => 'جامعة غزة'],
            [ 'name' => 'جامعة النجاح']
        ]);
    }
}
