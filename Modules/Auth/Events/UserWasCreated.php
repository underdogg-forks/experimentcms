<?php

namespace Modules\Auth\Events;

class UserWasCreated
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }
}
