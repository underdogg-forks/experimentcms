<?php

Route::group(['middleware' => 'api', 'namespace' => 'Modules\Employees\Http\Controllers'], function () {
    Route::group(['prefix' => 'api'], function () {
        Route::get('staffdata', ['as' => 'api.staff.data', 'uses' => 'StaffController@anyData']);
        Route::get('rolesdata', ['as' => 'api.roles.data', 'uses' => '\Modules\Core\Http\Controllers\RolesController@anyData']);
        Route::get('departmentsdata', ['as' => 'api.departments.data', 'uses' => 'DepartmentsController@anyData']);
        Route::get('teamsdata', ['as' => 'api.teams.data', 'uses' => 'TeamsController@anyData']);
    }); // End of ADMIN group
});
