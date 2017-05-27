<?php

return [
    'email.mailboxes' => [
        'index' => 'email::mailboxes.list resource',
        'create' => 'email::mailboxes.create resource',
        'edit' => 'email::mailboxes.edit resource',
        'destroy' => 'email::mailboxes.destroy resource',
    ],
    'email.mailboxprotocols' => [
        'index' => 'email::mailboxprotocols.list resource',
        'create' => 'email::mailboxprotocols.create resource',
        'edit' => 'email::mailboxprotocols.edit resource',
        'destroy' => 'email::mailboxprotocols.destroy resource',
    ],
// append


];
