<?php

use Illuminate\Routing\Router;


Route::group(['prefix' => '/backend'], function () {

    Route::get('', ['as' => 'adminpanel', 'uses' => '\Modules\Core\Http\Controllers\BackendController@index']);
    Route::get('/', ['as' => 'dashboard.index', 'uses' => '\Modules\Core\Http\Controllers\BackendController@index']);
    Route::get('dashboard', ['as' => 'dashboard.index', 'uses' => '\Modules\Core\Http\Controllers\BackendController@index']);
    Route::get('job-scheduler', ['as' => 'get.job.scheduler', 'uses' => 'CronJobsController@getScheduler']); //to get ob scheduler form page
    Route::get('error-and-debugging-options', ['as' => 'err.debug.settings', 'uses' => 'Admin\helpdesk\ErrorAndDebuggingController@showSettings']);

    Route::post('post-settings', ['as' => 'post.error.debug.settings',
        'uses' => 'Admin\helpdesk\ErrorAndDebuggingController@postSettings',]);
    //route to error logs table page
    Route::get('show-error-logs', [
        'as' => 'error.logs',
        'uses' => 'Admin\helpdesk\ErrorAndDebuggingController@showErrorLogs',
    ]);
    // Error routes
    Route::get('errors', ['as' => 'admin.errors.index', 'uses' => 'ErrorsController@index']);
    Route::get('errors/purge', ['as' => 'admin.errors.purge', 'uses' => 'ErrorsController@purge']);
    Route::get('errors/{errorId}/show', ['as' => 'admin.errors.show', 'uses' => 'ErrorsController@show']);
    // Settings routes
    Route::post('settings', ['as' => 'admin.settings.store', 'uses' => 'SettingsController@store']);
    Route::get('settings', ['as' => 'admin.settings.index', 'uses' => 'SettingsController@index']);
    Route::get('settings/load', ['as' => 'admin.settings.load', 'uses' => 'SettingsController@load']);
    Route::get('settings/create', ['as' => 'admin.settings.create', 'uses' => 'SettingsController@create']);
    Route::get('settings/{settingKey}', ['as' => 'admin.settings.show', 'uses' => 'SettingsController@show']);
    Route::patch('settings/{settingKey}', ['as' => 'admin.settings.patch', 'uses' => 'SettingsController@update']);
    Route::put('settings/{settingKey}', ['as' => 'admin.settings.update', 'uses' => 'SettingsController@update']);
    Route::delete('settings/{settingKey}', ['as' => 'admin.settings.destroy', 'uses' => 'SettingsController@destroy']);
    Route::get('settings/{settingKey}/edit', ['as' => 'admin.settings.edit', 'uses' => 'SettingsController@edit']);
    Route::get('settings/{settingKey}/confirm-delete', ['as' => 'admin.settings.confirm-delete', 'uses' => 'SettingsController@getModalDelete']);
    Route::get('settings/{settingKey}/delete', ['as' => 'admin.settings.delete', 'uses' => 'SettingsController@destroy']);
    Route::get('queue', ['as' => 'queue', 'uses' => 'Job\QueueController@index']);
    Route::get('form/queue', ['as' => 'queue.form', 'uses' => 'Job\QueueController@getForm']);
    Route::get('queue/{id}', ['as' => 'queue.edit', 'uses' => 'Job\QueueController@edit']);
    Route::post('queue/{id}', ['as' => 'queue.update', 'uses' => 'Job\QueueController@update']);
    Route::get('queue/{id}/activate', ['as' => 'queue.activate', 'uses' => 'Job\QueueController@activate']);
    // user---arindam
    Route::post('rolechangeadmin/{id}', ['as' => 'user.post.rolechangeadmin', 'uses' => 'Agent\helpdesk\UserController@changeRoleAdmin']);
    Route::post('rolechangeagent/{id}', ['as' => 'user.post.rolechangeagent', 'uses' => 'Agent\helpdesk\UserController@changeRoleAgent']);
    Route::post('rolechangeuser/{id}', ['as' => 'user.post.rolechangeuser', 'uses' => 'Agent\helpdesk\UserController@changeRoleUser']);
    Route::get('password', ['as' => 'user.changepassword', 'uses' => 'Agent\helpdesk\UserController@randomPassword']);
    Route::post('changepassword/{id}', ['as' => 'user.post.changepassword', 'uses' => 'Agent\helpdesk\UserController@randomPostPassword']);
    Route::post('delete/{id}', ['as' => 'user.post.delete', 'uses' => 'Agent\helpdesk\UserController@deleteAgent']);



}); // End of ADMIN group