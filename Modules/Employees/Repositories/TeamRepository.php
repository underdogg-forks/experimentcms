<?php

namespace Modules\Employees\Repositories;

use Modules\Employees\Models\Team;

class TeamRepository extends \Prettus\Repository\Eloquent\BaseRepository
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

    public function findWithoutFail($id, $columns = ['*'])
    {
        try {
            return $this->find($id, $columns);
        } catch (Exception $e) {
            return;
        }
    }


    /**
     * Configure the Model
     **/
    public function model()
    {
        return Team::class;
    }
}
