<?php

namespace Modules\Auth\Database\Seeders;

use Modules\Auth\Models\Permission;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [
                'name' => 'role-list',
                'display_name' => 'Display Role Listing',
                'description' => 'See only Listing Of Role'
            ],
            [
                'name' => 'role-create',
                'display_name' => 'Create Role',
                'description' => 'Create New Role'
            ],
            [
                'name' => 'role-edit',
                'display_name' => 'Edit Role',
                'description' => 'Edit Role'
            ],
            [
                'name' => 'role-delete',
                'display_name' => 'Delete Role',
                'description' => 'Delete Role'
            ],

            /*=============================*/

            [
                'name' => 'dashboard-list',
                'display_name' => 'Display dashboard Listing',
                'description' => 'See only Listing Of dashboard'
            ],

            /*=============================*/

            [
                'name' => 'user-list',
                'display_name' => 'Display users Listing',
                'description' => 'See only Listing Of users'
            ],
            [
                'name' => 'user-create',
                'display_name' => 'Create user',
                'description' => 'Create New user'
            ],
            [
                'name' => 'user-edit',
                'display_name' => 'Edit user',
                'description' => 'Edit user'
            ],
            [
                'name' => 'user-delete',
                'display_name' => 'Delete user',
                'description' => 'Delete user'
            ],

            /*============calendar=================*/

            [
                'name' => 'calendar-list',
                'display_name' => 'Display calendar Listing',
                'description' => 'See only calendar Of mailbox'
            ],
            [
                'name' => 'calendar-create',
                'display_name' => 'Create calendar',
                'description' => 'Create New calendar'
            ],
            [
                'name' => 'calendar-edit',
                'display_name' => 'Edit calendar',
                'description' => 'Edit calendar'
            ],
            [
                'name' => 'calendar-delete',
                'display_name' => 'Delete calendar',
                'description' => 'Delete calendar'
            ],

            /*=============================*/

            [
                'name' => 'mailbox-list',
                'display_name' => 'Display mailbox Listing',
                'description' => 'See only Listing Of mailbox'
            ],
            [
                'name' => 'mailbox-create',
                'display_name' => 'Create mailbox',
                'description' => 'Create New mailbox'
            ],
            [
                'name' => 'mailbox-edit',
                'display_name' => 'Edit mailbox',
                'description' => 'Edit mailbox'
            ],
            [
                'name' => 'mailbox-delete',
                'display_name' => 'Delete mailbox',
                'description' => 'Delete mailbox'
            ],

            /*=============================*/

            [
                'name' => 'lead-list',
                'display_name' => 'List lead',
                'description' => 'List New lead'
            ],
            [
                'name' => 'lead-create',
                'display_name' => 'Create lead',
                'description' => 'Create New lead'
            ],
            [
                'name' => 'lead-edit',
                'display_name' => 'Edit lead',
                'description' => 'Edit lead'
            ],
            [
                'name' => 'lead-delete',
                'display_name' => 'Delete lead',
                'description' => 'Delete lead'
            ],

            /*=============================*/

            [
                'name' => 'prospect-list',
                'display_name' => 'List prospect',
                'description' => 'List New prospect'
            ],
            [
                'name' => 'prospect-create',
                'display_name' => 'Create prospect',
                'description' => 'Create New prospect'
            ],
            [
                'name' => 'prospect-edit',
                'display_name' => 'Edit prospect',
                'description' => 'Edit prospect'
            ],
            [
                'name' => 'prospect-delete',
                'display_name' => 'Delete prospect',
                'description' => 'Delete prospect'
            ],

            /*=============================*/

            [
                'name' => 'relation-list',
                'display_name' => 'List relation',
                'description' => 'List New relation'
            ],
            [
                'name' => 'relation-create',
                'display_name' => 'Create relation',
                'description' => 'Create New relation'
            ],
            [
                'name' => 'relation-edit',
                'display_name' => 'Edit relation',
                'description' => 'Edit relation'
            ],
            [
                'name' => 'relation-merge',
                'display_name' => 'merge relation',
                'description' => 'merge relation'
            ],
            [
                'name' => 'relation-delete',
                'display_name' => 'Delete relation',
                'description' => 'Delete relation'
            ],

            /*===============tickets==============*/

            [
                'name' => 'ticket-list',
                'display_name' => 'List ticket',
                'description' => 'List New ticket'
            ],
            [
                'name' => 'ticket-create',
                'display_name' => 'Create ticket',
                'description' => 'Create New ticket'
            ],
            [
                'name' => 'ticket-edit',
                'display_name' => 'Edit ticket',
                'description' => 'Edit ticket'
            ],
            [
                'name' => 'ticket-merge',
                'display_name' => 'merge ticket',
                'description' => 'merge ticket'
            ],
            [
                'name' => 'ticket-delete',
                'display_name' => 'Delete ticket',
                'description' => 'Delete ticket'
            ],


            /*==============trade salesorders===============*/

            [
                'name' => 'salesorder-list',
                'display_name' => 'List salesorder',
                'description' => 'List New salesorder'
            ],
            [
                'name' => 'salesorder-create',
                'display_name' => 'Create salesorder',
                'description' => 'Create New salesorder'
            ],
            [
                'name' => 'salesorder-edit',
                'display_name' => 'Edit salesorder',
                'description' => 'Edit salesorder'
            ],
            [
                'name' => 'salesorder-delete',
                'display_name' => 'Delete salesorder',
                'description' => 'Delete salesorder'
            ],

            /*=============trade purchase orders================*/

            [
                'name' => 'purchaseorder-list',
                'display_name' => 'List purchaseorder',
                'description' => 'List New purchaseorder'
            ],
            [
                'name' => 'purchaseorder-create',
                'display_name' => 'Create purchaseorder',
                'description' => 'Create New purchaseorder'
            ],
            [
                'name' => 'purchaseorder-edit',
                'display_name' => 'Edit purchaseorder',
                'description' => 'Edit purchaseorder'
            ],
            [
                'name' => 'purchaseorder-delete',
                'display_name' => 'Delete purchaseorder',
                'description' => 'Delete purchaseorder'
            ],


        ];

        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }
}
