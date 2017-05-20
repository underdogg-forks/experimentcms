<?php

return [
    'email.mailboxes' => [
        'index' => 'email::mailboxes.list resource',
        'create' => 'email::mailboxes.create resource',
        'edit' => 'email::mailboxes.edit resource',
        'destroy' => 'email::mailboxes.destroy resource',
    ],
    'email.mailtypes' => [
        'index' => 'email::mailtypes.list resource',
        'create' => 'email::mailtypes.create resource',
        'edit' => 'email::mailtypes.edit resource',
        'destroy' => 'email::mailtypes.destroy resource',
    ],
// append


];
