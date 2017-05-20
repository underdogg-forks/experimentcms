<?php

namespace Modules\Core\Composers;

use Illuminate\Contracts\View\View;
////use Modules\Auth\Contracts\Authentication;

class CurrentUserViewComposer
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
        //$view->with('currentUser', $this->auth->user());
    }
}
