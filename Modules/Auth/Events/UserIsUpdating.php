<?php

namespace Modules\Auth\Events;

class UserIsUpdating
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }
}
