<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class infoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert([
            'ssn'=>34234234,
            'first_name' => 'حسام',
            'second_name' =>  'حماد',
            'third_name' => 'الأستاذ',
            'last_name' => 'الأستاذ',
            'gender' => 'ذكر',
            'cityOfHome' => 'غزة',
            'age' =>22,
            'cityOfBorn' =>'بلجيكا',
            'employee' => true,
            'region_cd'=>'غزة',
            'hay_cd'=>'معسكر',
            'status_cd'=>'سليم',
            'social_status_cd'=>'اعزب',
            'religion_cd'=>'مسيحية',
            'image' => '1.jpg'
        ]);
        DB::table('infos')->insert([
            'ssn'=>788588,
            'first_name' => 'امل',
            'second_name' =>  'أحمد',
            'third_name' => 'حمدان',
            'last_name' => 'الأستاذ',
            'gender' => 'انثى',
            'cityOfHome' => 'رفح',
            'age' =>33,
            'cityOfBorn' =>'فلسطين',
            'employee' => true,
            'region_cd'=>'غزة',
            'hay_cd'=>'معسكر',
            'status_cd'=>'سليم',
            'social_status_cd'=>'اعزب',
            'religion_cd'=>'مسيحية',
            'image' =>'1.jpg'
        ]);
        DB::table('infos')->insert([
                'ssn'=>96432,
                'first_name' => 'حنين',
                'second_name' =>  'حسام',
                'third_name' => 'حماد',
                'last_name' => 'الأستاذ',
                'gender' => 'انثى',
                'cityOfHome' => 'رفح',
                'age' =>33,
                'cityOfBorn' =>'فلسطين',
                'employee' => true,
                'region_cd'=>'غزة',
                'hay_cd'=>'معسكر',
                'status_cd'=>'سليم',
                'social_status_cd'=>'اعزب',
                'religion_cd'=>'مسيحية',
                'image' =>'1.jpg'
        ]
    );

    }


}
