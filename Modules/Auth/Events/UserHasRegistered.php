<?php

namespace Modules\Auth\Events;

class UserHasRegistered
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }
}
