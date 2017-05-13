<?php

namespace Modules\Auth\Composers;

use Modules\Auth\Permissions\PermissionManager;

class PermissionsViewComposer
{
    /**
     * @var PermissionManager
     */
    private $permissions;

    public function __construct(PermissionManager $permissions)
    {
        $this->permissions = $permissions;
    }

    public function compose($view)
    {
        // Get all permissions
        $view->permissions = $this->permissions->all();
    }
}
