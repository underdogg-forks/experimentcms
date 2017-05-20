<?php

namespace Modules\Employees\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class StaffTableSeeder extends Seeder
{



    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        static $password;
        $faker = Faker::create();


        for($i = 0; $i < 100; $i++) {


                \DB::table('staff')->insert([
                    'company_id' => 1,
                    'firstname' => $faker->firstName,
                    'lastname' => $faker->lastName,
                    'email' => $faker->email,
                ]);

        }
    }
}
