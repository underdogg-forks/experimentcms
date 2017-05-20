<?php

namespace Modules\Employees\Repositories;

use Modules\Employees\Models\Staff;

class StaffRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email',
        'firstname',
        'lastname',
        'facebook',
        'linkedin',
        'phonenumber',
        'skype',
        'password',
        'datecreated',
        'profile_image',
        'last_ip',
        'last_login',
        'last_password_change',
        'new_pass_key',
        'new_pass_key_requested',
        'admin',
        'role',
        'active',
        'default_language',
        'media_path_slug',
        'is_not_staff'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Staff::class;
    }
}
