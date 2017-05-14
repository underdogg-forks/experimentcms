<?php

namespace Modules\Auth\Database\Seeders;

use Modules\Auth\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [
                'id' => '100',
                'name' => 'administrator',
                'display_name' => 'administrator',
                'description' => 'See it all'
            ],

            [
                'id' => '90',
                'name' => 'moderator',
                'display_name' => 'moderator',
                'description' => 'See it all less deleting and editing admin users'
            ],

            [
                'id' => '80',
                'name' => 'manager',
                'display_name' => 'manager',
                'description' => 'See it all less deleting and editing admin users'
            ],

            [
                'id' => '70',
                'name' => 'teamleader',
                'display_name' => 'teamleader',
                'description' => 'See it all less deleting and editing admin users'
            ],

            [
                'id' => '60',
                'name' => 'seniorstaff',
                'display_name' => 'seniorstaff',
                'description' => 'See it all less deleting and editing admin users'
            ],

            [
                'id' => '50',
                'name' => 'staff',
                'display_name' => 'staff',
                'description' => 'See it all less deleting and editing admin users'
            ],

            [
                'id' => '10',
                'name' => 'user',
                'display_name' => 'user',
                'description' => 'See it all less deleting and editing admin users'
            ],

            [
                'id' => '9',
                'name' => 'clientmanager',
                'display_name' => 'clientmanager',
                'description' => 'Client Manager, logged in can make users for that client'
            ],

            [
                'id' => '5',
                'name' => 'clientuser',
                'display_name' => 'clientuser',
                'description' => 'Client User, can only see his own tickets'
            ],


        ];

        foreach ($role as $key => $value) {
            Role::create($value);
        }
    }
}
