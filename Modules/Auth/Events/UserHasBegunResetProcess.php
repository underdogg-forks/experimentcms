<?php

namespace Modules\Auth\Events;

class UserHasBegunResetProcess
{
    public $user;
    public $code;

    public function __construct($user, $code)
    {
        $this->user = $user;
        $this->code = $code;
    }
}
