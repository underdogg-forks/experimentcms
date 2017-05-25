<?php
namespace Modules\Auth\Models;


use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'display_name',
        'description',
    ];

    public function staffRole()
    {
        return $this->hasMany(Role::class, 'staff_id', 'id');
    }

    public function userRole()
    {
        return $this->hasMany(Role::class, 'user_id', 'id');
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_role', 'role_id', 'permissions_id');
    }
}