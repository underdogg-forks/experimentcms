<?php

namespace Modules\Auth\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Maatwebsite\Sidebar\Domain\Events\FlushesSidebarCache;
use Modules\Auth\Events\Handlers\SendRegistrationConfirmationEmail;
use Modules\Auth\Events\Handlers\SendResetCodeEmail;
use Modules\Auth\Events\RoleWasUpdated;
use Modules\Auth\Events\UserHasBegunResetProcess;
use Modules\Auth\Events\UserWasUpdated;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        UserHasBegunResetProcess::class => [
            SendResetCodeEmail::class,
        ],
        UserWasUpdated::class => [
            FlushesSidebarCache::class,
        ],
        RoleWasUpdated::class => [
            FlushesSidebarCache::class,
        ],
    ];
}
