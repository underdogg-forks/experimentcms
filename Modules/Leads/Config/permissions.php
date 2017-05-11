<?php

return [
    'leads.leads' => [
        'index' => 'leads::leads.list resource',
        'create' => 'leads::leads.create resource',
        'edit' => 'leads::leads.edit resource',
        'destroy' => 'leads::leads.destroy resource',
    ],
    'leads.leadstatuses' => [
        'index' => 'leads::leadstatuses.list resource',
        'create' => 'leads::leadstatuses.create resource',
        'edit' => 'leads::leadstatuses.edit resource',
        'destroy' => 'leads::leadstatuses.destroy resource',
    ],
    'leads.leadsources' => [
        'index' => 'leads::leadsources.list resource',
        'create' => 'leads::leadsources.create resource',
        'edit' => 'leads::leadsources.edit resource',
        'destroy' => 'leads::leadsources.destroy resource',
    ],
// append



];
