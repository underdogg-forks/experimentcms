<?php

use Illuminate\Routing\Router;

/** @var Router $router */
Route::group(['prefix' => '/user'], function (Router $router) {
    Route::get('users', [
        'as' => 'admin.user.user.index',
        'uses' => 'UserController@index',
        'middleware' => 'can:user.users.index',
    ]);
    Route::get('users/create', [
        'as' => 'admin.user.user.create',
        'uses' => 'UserController@create',
        'middleware' => 'can:user.users.create',
    ]);
    Route::post('users', [
        'as' => 'admin.user.user.store',
        'uses' => 'UserController@store',
        'middleware' => 'can:user.users.create',
    ]);
    Route::get('users/{users}/edit', [
        'as' => 'admin.user.user.edit',
        'uses' => 'UserController@edit',
        'middleware' => 'can:user.users.edit',
    ]);
    Route::patch('users/{users}/edit', [
        'as' => 'admin.user.user.update',
        'uses' => 'UserController@update',
        'middleware' => 'can:user.users.edit',
    ]);
    Route::get('users/{users}/sendResetPassword', [
        'as' => 'admin.user.user.sendResetPassword',
        'uses' => 'UserController@sendResetPassword',
        'middleware' => 'can:user.users.edit',
    ]);
    Route::delete('users/{users}', [
        'as' => 'admin.user.user.destroy',
        'uses' => 'UserController@destroy',
        'middleware' => 'can:user.users.destroy',
    ]);
});


Route::group(['middleware' => ['auth'], 'prefix' => 'backend', 'namespace' => ''], function () {
    Route::resource('users', 'UserController');

    /*Route::get('roles', ['as' => 'roles.index', 'uses' => 'RoleController@index', 'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
    Route::get('roles/create', ['as' => 'roles.create', 'uses' => 'RoleController@create', 'middleware' => ['permission:role-create']]);
    Route::post('roles/create', ['as' => 'roles.store', 'uses' => 'RoleController@store', 'middleware' => ['permission:role-create']]);
    Route::get('roles/{id}', ['as' => 'roles.show', 'uses' => 'RoleController@show']);
    Route::get('roles/{id}/edit', ['as' => 'roles.edit', 'uses' => 'RoleController@edit', 'middleware' => ['permission:role-edit']]);
    Route::patch('roles/{id}', ['as' => 'roles.update', 'uses' => 'RoleController@update', 'middleware' => ['permission:role-edit']]);
    Route::delete('roles/{id}', ['as' => 'roles.destroy', 'uses' => 'RoleController@destroy', 'middleware' => ['permission:role-delete']]);*/
    Route::resource('roles', 'RolesController');

    Route::get('roles', [
        'as' => 'backend.roles.index',
        'uses' => '\Modules\Auth\Http\ControllersRolesController@index',
        //'middleware' => ['permission:role-list|role-create|role-edit|role-delete'],'can:user.roles.index',
    ]);
    Route::get('roles/create', [
        'as' => 'backend.roles.create',
        'uses' => '\Modules\Auth\Http\ControllersRolesController@create',
        //'middleware' => ['permission:role-create'],'can:user.roles.create',
    ]);
    Route::post('roles', [
        'as' => 'backend.roles.store',
        'uses' => '\Modules\Auth\Http\ControllersRolesController@store',
        //'middleware' => ['permission:role-create'], 'can:user.roles.create',
    ]);
    Route::get('roles/{roles}/edit', [
        'as' => 'backend.roles.edit',
        'uses' => '\Modules\Auth\Http\ControllersRolesController@edit',
        //'middleware' => ['permission:role-edit'],'can:user.roles.edit',
    ]);
    Route::patch('roles/{roles}/edit', [
        'as' => 'backend.roles.update',
        'uses' => '\Modules\Auth\Http\ControllersRolesController@update',
        //'middleware' => ['permission:role-edit'],'can:user.roles.edit',
    ]);
    Route::delete('roles/{roles}', [
        'as' => 'backend.roles.destroy',
        'uses' => '\Modules\Auth\Http\ControllersRolesController@destroy',
        //'middleware' => ['permission:role-delete'],'can:user.roles.destroy',
    ]);


});

Route::group(['prefix' => '/account'], function (Router $router) {
    Route::get('profile', [
        'as' => 'admin.account.profile.edit',
        'uses' => 'Account\ProfileController@edit',
    ]);
    Route::patch('profile', [
        'as' => 'admin.account.profile.update',
        'uses' => 'Account\ProfileController@update',
    ]);
    Route::bind('userTokenId', function ($id) {
        return app(\Modules\User\Repositories\UserTokenRepository::class)->find($id);
    });
    Route::get('api-keys', [
        'as' => 'admin.account.api.index',
        'uses' => 'Account\ApiKeysController@index',
        'middleware' => 'can:account.api-keys.index',
    ]);
    Route::get('api-keys/create', [
        'as' => 'admin.account.api.create',
        'uses' => 'Account\ApiKeysController@create',
        'middleware' => 'can:account.api-keys.create',
    ]);
    Route::delete('api-keys/{userTokenId}', [
        'as' => 'admin.account.api.destroy',
        'uses' => 'Account\ApiKeysController@destroy',
        'middleware' => 'can:account.api-keys.destroy',
    ]);
});
