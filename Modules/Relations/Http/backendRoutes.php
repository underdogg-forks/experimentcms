<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/relations'], function (Router $router) {
    $router->bind('relation', function ($id) {
        return app('Modules\Relations\Repositories\RelationRepository')->find($id);
    });
    $router->get('relations', [
        'as' => 'admin.relations.relation.index',
        'uses' => 'RelationController@index',
        'middleware' => 'can:relations.relations.index'
    ]);
    $router->get('relations/create', [
        'as' => 'admin.relations.relation.create',
        'uses' => 'RelationController@create',
        'middleware' => 'can:relations.relations.create'
    ]);
    $router->post('relations', [
        'as' => 'admin.relations.relation.store',
        'uses' => 'RelationController@store',
        'middleware' => 'can:relations.relations.create'
    ]);
    $router->get('relations/{relation}/edit', [
        'as' => 'admin.relations.relation.edit',
        'uses' => 'RelationController@edit',
        'middleware' => 'can:relations.relations.edit'
    ]);
    $router->put('relations/{relation}', [
        'as' => 'admin.relations.relation.update',
        'uses' => 'RelationController@update',
        'middleware' => 'can:relations.relations.edit'
    ]);
    $router->delete('relations/{relation}', [
        'as' => 'admin.relations.relation.destroy',
        'uses' => 'RelationController@destroy',
        'middleware' => 'can:relations.relations.destroy'
    ]);
// append

});
