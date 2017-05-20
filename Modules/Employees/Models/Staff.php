<?php

namespace Modules\Employees\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Staff
 * @package App\Models
 * @version May 12, 2017, 8:47 am UTC
 */
class Staff extends Model
{
    use SoftDeletes;

    public $table = 'staff';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'firstname',
        'lastname',
        'email',
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'email' => 'string',
        'firstname' => 'string',
        'lastname' => 'string',
        'facebook' => 'string',
        'linkedin' => 'string',
        'phonenumber' => 'string',
        'skype' => 'string',
        'password' => 'string',
        'profile_image' => 'string',
        'last_ip' => 'string',
        'new_pass_key' => 'string',
        'admin' => 'integer',
        'role' => 'integer',
        'active' => 'integer',
        'default_language' => 'string',
        'media_path_slug' => 'string',
        'is_not_staff' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
