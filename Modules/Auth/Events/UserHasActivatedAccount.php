<?php

namespace Modules\Auth\Events;

class UserHasActivatedAccount
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }
}
