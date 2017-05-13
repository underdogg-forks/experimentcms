<?php

view()->composer(
    [
        'auth::admin.partials.permissions',
        'auth::admin.partials.permissions-create',
    ],
    'Modules\Auth\Composers\PermissionsViewComposer'
);

view()->composer(
    [
        'partials.sidebar-nav',
        'partials.top-nav',
        'layouts.master',
        'partials.*',
    ],
    'Modules\Auth\Composers\UsernameViewComposer'
);
