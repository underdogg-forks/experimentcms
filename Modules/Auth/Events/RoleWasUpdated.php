<?php

namespace Modules\Auth\Events;

class RoleWasUpdated
{
    public $role;

    public function __construct($role)
    {
        $this->role = $role;
    }
}
