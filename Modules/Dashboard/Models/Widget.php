<?php

namespace Modules\Dashboard\Models;

use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    protected $fillable = ['widgets', 'staff_id'];
    protected $table = 'dashboard__widgets';

    public function user()
    {
        $driver = config('asgard.user.config.driver');

        return $this->belongsTo("Modules\\User\\Models\\{$driver}\\User");
    }
}
