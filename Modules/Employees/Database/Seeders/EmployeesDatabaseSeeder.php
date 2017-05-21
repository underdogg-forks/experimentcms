<?php

namespace Modules\Employees\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class EmployeesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //$this->call(StaffTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        //$this->call(TeamsTableSeeder::class);
        //$this->call("OthersTableSeeder");

    }
}
