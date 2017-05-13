<?php

namespace Modules\Auth\Models;

use Laracasts\Presenter\PresentableTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use PresentableTrait;
    use Notifiable;
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $loginNames = ['email'];

    protected $presenter = UserPresenter::class;

    public function __construct(array $attributes = [])
    {
        //parent::__construct($attributes);
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Checks if the user is in the given role.
     * @param  mixed $role
     * @return bool
     */
    public function inRole($role)
    {}


    public function hasRoleId($roleId)
    {
        return $this->roles()->whereId($roleId)->count() >= 1;
    }

    /**
     * @inheritdoc
     */
    public function hasRoleSlug($slug)
    {
        return $this->roles()->whereSlug($slug)->count() >= 1;
    }

    /**
     * @inheritdoc
     */
    public function hasRoleName($name)
    {
        return $this->roles()->whereName($name)->count() >= 1;
    }

    /**
     * @inheritdoc
     */
    public function isActivated()
    {
        if (Activation::completed($this)) {
            return true;
        }

        return false;
    }





    /**
     * @inheritdoc
     */
    public function hasAccess($permission)
    {
        //$permissions = $this->getPermissionsInstance();
        //return $permissions->hasAccess($permission);
    }
}
