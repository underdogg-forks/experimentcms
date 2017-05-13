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

    Route::get('roles', [
        'as' => 'admin.user.role.index',
        'uses' => 'RolesController@index',
        'middleware' => 'can:user.roles.index',
    ]);
    Route::get('roles/create', [
        'as' => 'admin.user.role.create',
        'uses' => 'RolesController@create',
        'middleware' => 'can:user.roles.create',
    ]);
    Route::post('roles', [
        'as' => 'admin.user.role.store',
        'uses' => 'RolesController@store',
        'middleware' => 'can:user.roles.create',
    ]);
    Route::get('roles/{roles}/edit', [
        'as' => 'admin.user.role.edit',
        'uses' => 'RolesController@edit',
        'middleware' => 'can:user.roles.edit',
    ]);
    Route::patch('roles/{roles}/edit', [
        'as' => 'admin.user.role.update',
        'uses' => 'RolesController@update',
        'middleware' => 'can:user.roles.edit',
    ]);
    Route::delete('roles/{roles}', [
        'as' => 'admin.user.role.destroy',
        'uses' => 'RolesController@destroy',
        'middleware' => 'can:user.roles.destroy',
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
