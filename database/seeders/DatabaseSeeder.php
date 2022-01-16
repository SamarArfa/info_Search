<?php

namespace Database\Seeders;

use App\Models\transport;
use Database\Seeders\infoSeeder;
use Illuminate\Database\Seeder;
use  Database\Seeders\homeSeeder;
use  Database\Seeders\bornSeeder;
use  Database\Seeders\university;
use  Database\Seeders\religion_cd;
use  Database\Seeders\college;
use  Database\Seeders\region_cd;
use  Database\Seeders\hay_cd;
use  Database\Seeders\qualification;
use  Database\Seeders\gender;
use  Database\Seeders\specialization;
use  Database\Seeders\status_cd;
use  Database\Seeders\social_status_cd;
use  Database\Seeders\vehicle_type;
use  Database\Seeders\crossing;
use  Database\Seeders\car_color;
use  Database\Seeders\manufacture_comp;
use  Database\Seeders\employee_cd;
use  Database\Seeders\Emp_work;
use  Database\Seeders\travel_dest;
use  Database\Seeders\travel_case;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(homeSeeder::class);
        $this->call(bornSeeder::class);
        $this->call(infoSeeder::class);
        $this->call(college::class);
        $this->call(hay_cd::class);
        $this->call(gender::class);
        $this->call(qualification::class);
        $this->call(region_cd::class);
        $this->call(religion_cd::class);
        $this->call(social_status_cd::class);
        $this->call(specialization::class);
        $this->call(status_cd::class);
        $this->call(university::class);
        $this->call(travel_case::class);
        $this->call(travel_dest::class);
        $this->call(vehicle_type::class);
        $this->call(car_color::class);
        $this->call(Emp_work::class);
        $this->call(employee_cd::class);
        $this->call(crossing::class);
        $this->call(manufacture_comp::class);


    }
}
