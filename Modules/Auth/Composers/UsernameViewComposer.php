<?php

namespace Modules\Auth\Composers;

use Illuminate\Contracts\View\View;
////use Modules\Auth\Contracts\Authentication;

class UsernameViewComposer
{
    /**
     * @var Authentication
     */
    private $auth;

    //Authentication $auth
    public function __construct()
    {
        //$this->auth = $auth;
    }

    public function compose(View $view)
    {
        //$view->with('user', $this->auth->user());
    }
}
