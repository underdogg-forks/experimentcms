<?php

return [
    'user.users' => [
        'index' => 'auth::users.list user',
        'create' => 'auth::users.create user',
        'edit' => 'auth::users.edit user',
        'destroy' => 'auth::users.destroy user',
    ],
    'user.roles' => [
        'index' => 'auth::roles.list resource',
        'create' => 'auth::roles.create resource',
        'edit' => 'auth::roles.edit resource',
        'destroy' => 'auth::roles.destroy resource',
    ],
    'account.api-keys' => [
        'index' => 'auth::users.list api key',
        'create' => 'auth::users.create api key',
        'destroy' => 'auth::users.destroy api key',
    ],
];
