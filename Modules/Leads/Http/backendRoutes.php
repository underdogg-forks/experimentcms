<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/leads'], function (Router $router) {
    $router->bind('lead', function ($id) {
        return app('Modules\Leads\Repositories\LeadRepository')->find($id);
    });
    $router->get('leads', [
        'as' => 'admin.leads.lead.index',
        'uses' => 'LeadController@index',
        'middleware' => 'can:leads.leads.index'
    ]);
    $router->get('leads/create', [
        'as' => 'admin.leads.lead.create',
        'uses' => 'LeadController@create',
        'middleware' => 'can:leads.leads.create'
    ]);
    $router->post('leads', [
        'as' => 'admin.leads.lead.store',
        'uses' => 'LeadController@store',
        'middleware' => 'can:leads.leads.create'
    ]);
    $router->get('leads/{lead}/edit', [
        'as' => 'admin.leads.lead.edit',
        'uses' => 'LeadController@edit',
        'middleware' => 'can:leads.leads.edit'
    ]);
    $router->put('leads/{lead}', [
        'as' => 'admin.leads.lead.update',
        'uses' => 'LeadController@update',
        'middleware' => 'can:leads.leads.edit'
    ]);
    $router->delete('leads/{lead}', [
        'as' => 'admin.leads.lead.destroy',
        'uses' => 'LeadController@destroy',
        'middleware' => 'can:leads.leads.destroy'
    ]);
    $router->bind('leadstatus', function ($id) {
        return app('Modules\Leads\Repositories\LeadStatusRepository')->find($id);
    });
    $router->get('leadstatuses', [
        'as' => 'admin.leads.leadstatus.index',
        'uses' => 'LeadStatusController@index',
        'middleware' => 'can:leads.leadstatuses.index'
    ]);
    $router->get('leadstatuses/create', [
        'as' => 'admin.leads.leadstatus.create',
        'uses' => 'LeadStatusController@create',
        'middleware' => 'can:leads.leadstatuses.create'
    ]);
    $router->post('leadstatuses', [
        'as' => 'admin.leads.leadstatus.store',
        'uses' => 'LeadStatusController@store',
        'middleware' => 'can:leads.leadstatuses.create'
    ]);
    $router->get('leadstatuses/{leadstatus}/edit', [
        'as' => 'admin.leads.leadstatus.edit',
        'uses' => 'LeadStatusController@edit',
        'middleware' => 'can:leads.leadstatuses.edit'
    ]);
    $router->put('leadstatuses/{leadstatus}', [
        'as' => 'admin.leads.leadstatus.update',
        'uses' => 'LeadStatusController@update',
        'middleware' => 'can:leads.leadstatuses.edit'
    ]);
    $router->delete('leadstatuses/{leadstatus}', [
        'as' => 'admin.leads.leadstatus.destroy',
        'uses' => 'LeadStatusController@destroy',
        'middleware' => 'can:leads.leadstatuses.destroy'
    ]);
    $router->bind('leadsource', function ($id) {
        return app('Modules\Leads\Repositories\LeadSourceRepository')->find($id);
    });
    $router->get('leadsources', [
        'as' => 'admin.leads.leadsource.index',
        'uses' => 'LeadSourceController@index',
        'middleware' => 'can:leads.leadsources.index'
    ]);
    $router->get('leadsources/create', [
        'as' => 'admin.leads.leadsource.create',
        'uses' => 'LeadSourceController@create',
        'middleware' => 'can:leads.leadsources.create'
    ]);
    $router->post('leadsources', [
        'as' => 'admin.leads.leadsource.store',
        'uses' => 'LeadSourceController@store',
        'middleware' => 'can:leads.leadsources.create'
    ]);
    $router->get('leadsources/{leadsource}/edit', [
        'as' => 'admin.leads.leadsource.edit',
        'uses' => 'LeadSourceController@edit',
        'middleware' => 'can:leads.leadsources.edit'
    ]);
    $router->put('leadsources/{leadsource}', [
        'as' => 'admin.leads.leadsource.update',
        'uses' => 'LeadSourceController@update',
        'middleware' => 'can:leads.leadsources.edit'
    ]);
    $router->delete('leadsources/{leadsource}', [
        'as' => 'admin.leads.leadsource.destroy',
        'uses' => 'LeadSourceController@destroy',
        'middleware' => 'can:leads.leadsources.destroy'
    ]);
// append



});
