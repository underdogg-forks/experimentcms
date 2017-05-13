<?php

namespace Modules\Auth\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{



    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        static $password;
        //$faker = Faker::create();
        //dd($faker->name);
        /*\DB::table('users')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Admin',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('admin123'),
                    'remember_token' => null,
                    'created_at' => '2000-01-01',
                    'updated_at' => '2000-01-01',
                ),
        ));*/
        /*$faker = Faker::create();


        $factory->define(Modules\Auth\Models\User::class, function (Faker\Generator $faker) {
            return [
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt(str_random(10)),
                'remember_token' => str_random(10),
            ];
        });*/


        /*for($i = 0; $i < 100; $i++) {
            \Modules\Auth\Models\User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => $password ?: $password = bcrypt('secret'),
            ]);
        }*/
    }
}
