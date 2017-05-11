<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/prospects'], function (Router $router) {
    $router->bind('prospect', function ($id) {
        return app('Modules\Prospects\Repositories\ProspectRepository')->find($id);
    });
    $router->get('prospects', [
        'as' => 'admin.prospects.prospect.index',
        'uses' => 'ProspectController@index',
        'middleware' => 'can:prospects.prospects.index'
    ]);
    $router->get('prospects/create', [
        'as' => 'admin.prospects.prospect.create',
        'uses' => 'ProspectController@create',
        'middleware' => 'can:prospects.prospects.create'
    ]);
    $router->post('prospects', [
        'as' => 'admin.prospects.prospect.store',
        'uses' => 'ProspectController@store',
        'middleware' => 'can:prospects.prospects.create'
    ]);
    $router->get('prospects/{prospect}/edit', [
        'as' => 'admin.prospects.prospect.edit',
        'uses' => 'ProspectController@edit',
        'middleware' => 'can:prospects.prospects.edit'
    ]);
    $router->put('prospects/{prospect}', [
        'as' => 'admin.prospects.prospect.update',
        'uses' => 'ProspectController@update',
        'middleware' => 'can:prospects.prospects.edit'
    ]);
    $router->delete('prospects/{prospect}', [
        'as' => 'admin.prospects.prospect.destroy',
        'uses' => 'ProspectController@destroy',
        'middleware' => 'can:prospects.prospects.destroy'
    ]);
    $router->bind('prospectstatus', function ($id) {
        return app('Modules\Prospects\Repositories\ProspectStatusRepository')->find($id);
    });
    $router->get('prospectstatuses', [
        'as' => 'admin.prospects.prospectstatus.index',
        'uses' => 'ProspectStatusController@index',
        'middleware' => 'can:prospects.prospectstatuses.index'
    ]);
    $router->get('prospectstatuses/create', [
        'as' => 'admin.prospects.prospectstatus.create',
        'uses' => 'ProspectStatusController@create',
        'middleware' => 'can:prospects.prospectstatuses.create'
    ]);
    $router->post('prospectstatuses', [
        'as' => 'admin.prospects.prospectstatus.store',
        'uses' => 'ProspectStatusController@store',
        'middleware' => 'can:prospects.prospectstatuses.create'
    ]);
    $router->get('prospectstatuses/{prospectstatus}/edit', [
        'as' => 'admin.prospects.prospectstatus.edit',
        'uses' => 'ProspectStatusController@edit',
        'middleware' => 'can:prospects.prospectstatuses.edit'
    ]);
    $router->put('prospectstatuses/{prospectstatus}', [
        'as' => 'admin.prospects.prospectstatus.update',
        'uses' => 'ProspectStatusController@update',
        'middleware' => 'can:prospects.prospectstatuses.edit'
    ]);
    $router->delete('prospectstatuses/{prospectstatus}', [
        'as' => 'admin.prospects.prospectstatus.destroy',
        'uses' => 'ProspectStatusController@destroy',
        'middleware' => 'can:prospects.prospectstatuses.destroy'
    ]);
    $router->bind('prospectsource', function ($id) {
        return app('Modules\Prospects\Repositories\ProspectSourceRepository')->find($id);
    });
    $router->get('prospectsources', [
        'as' => 'admin.prospects.prospectsource.index',
        'uses' => 'ProspectSourceController@index',
        'middleware' => 'can:prospects.prospectsources.index'
    ]);
    $router->get('prospectsources/create', [
        'as' => 'admin.prospects.prospectsource.create',
        'uses' => 'ProspectSourceController@create',
        'middleware' => 'can:prospects.prospectsources.create'
    ]);
    $router->post('prospectsources', [
        'as' => 'admin.prospects.prospectsource.store',
        'uses' => 'ProspectSourceController@store',
        'middleware' => 'can:prospects.prospectsources.create'
    ]);
    $router->get('prospectsources/{prospectsource}/edit', [
        'as' => 'admin.prospects.prospectsource.edit',
        'uses' => 'ProspectSourceController@edit',
        'middleware' => 'can:prospects.prospectsources.edit'
    ]);
    $router->put('prospectsources/{prospectsource}', [
        'as' => 'admin.prospects.prospectsource.update',
        'uses' => 'ProspectSourceController@update',
        'middleware' => 'can:prospects.prospectsources.edit'
    ]);
    $router->delete('prospectsources/{prospectsource}', [
        'as' => 'admin.prospects.prospectsource.destroy',
        'uses' => 'ProspectSourceController@destroy',
        'middleware' => 'can:prospects.prospectsources.destroy'
    ]);
// append



});
