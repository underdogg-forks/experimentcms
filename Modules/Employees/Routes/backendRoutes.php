<?php


Route::group(['prefix' => 'staffpanel'], function () {
    Route::get('staffpanel', ['as' => 'staffpanel', 'uses' => 'StaffPanelController@index']);

}); // End of ADMIN group


Route::group(['middleware' => 'auth', 'namespace' => 'Modules\Employees\Http\Controllers'], function () {


    // Staff routes
    Route::post('backend/staff/enableSelected', ['as' => 'backend.staff.enable-selected', 'uses' => 'StaffController@enableSelected']);
    Route::post('backend/staff/disableSelected', ['as' => 'backend.staff.disable-selected', 'uses' => 'StaffController@disableSelected']);
    Route::get('backend/staff/search', ['as' => 'backend.staff.search', 'uses' => 'StaffController@searchByName']);
    Route::get('backend/staff/list', ['as' => 'backend.staff.list', 'uses' => 'StaffController@listByPage']);

    Route::get('backend/staff/manage', ['as' => 'backend.staff.manage', 'uses' => 'StaffController@index']);
    Route::get('backend/staff', ['as' => 'backend.staff.index', 'uses' => 'StaffController@index']);
    Route::post('backend/staff', ['as' => 'backend.staff.store', 'uses' => 'StaffController@store']);
    Route::get('backend/staff/create', ['as' => 'backend.staff.create', 'uses' => 'StaffController@create']);
    Route::put('backend/staff/{staff}', ['as' => 'backend.staff.update', 'uses' => 'StaffController@update']);
    Route::patch('backend/staff/{staff}', ['as' => 'backend.staff.update', 'uses' => 'StaffController@update']);

    Route::get('backend/staff/{staff}', ['as' => 'backend.staff.show', 'uses' => 'StaffController@show']);
    Route::get('backend/staff/{staffId}/confirm-delete', ['as' => 'backend.staff.confirm-delete', 'uses' => 'StaffController@getModalDelete']);


    Route::delete('backend/staff/{staff}', ['as' => 'backend.staff.destroy', 'uses' => 'StaffController@destroy']);
    Route::get('backend/staff/{staff}/edit', ['as' => 'backend.staff.edit', 'uses' => 'StaffController@edit']);
    Route::get('staff/{staffId}/enable', ['as' => 'backend.staff.enable', 'uses' => 'StaffController@enable']);
    Route::get('staff/{staffId}/disable', ['as' => 'backend.staff.disable', 'uses' => 'StaffController@disable']);


    Route::post('backend/department', ['as' => 'backend.departments.store', 'uses' => 'DepartmentsController@store']);
    Route::get('backend/departments', ['as' => 'backend.departments.index', 'uses' => 'DepartmentsController@index']);
    Route::get('backend/departments/manage', ['as' => 'backend.departments.manage', 'uses' => 'DepartmentsController@index']);
    Route::get('backend/department/create', ['as' => 'backend.departments.create', 'uses' => 'DepartmentsController@create']);
    Route::get('backend/department/{departmentId}', ['as' => 'backend.departments.show', 'uses' => 'DepartmentsController@show']);
    Route::patch('backend/department/{departmentId}', ['as' => 'backend.departments.patch', 'uses' => 'DepartmentsController@update']);
    Route::put('backend/department/{departmentId}', ['as' => 'backend.departments.update', 'uses' => 'DepartmentsController@update']);
    Route::delete('backend/department/{departmentId}', ['as' => 'backend.departments.destroy', 'uses' => 'DepartmentsController@destroy']);
    Route::get('backend/department/{departmentId}/edit', ['as' => 'backend.departments.edit', 'uses' => 'DepartmentsController@edit']);
    Route::get('backend/department/{departmentId}/confirm-delete', ['as' => 'backend.departments.confirm-delete', 'uses' => 'DepartmentsController@getModalDelete']);
    Route::get('backend/department/{departmentId}/delete', ['as' => 'backend.departments.delete', 'uses' => 'DepartmentsController@destroy']);


    Route::post('backend/team', ['as' => 'backend.teams.store', 'uses' => 'TeamsController@store']);
    Route::get('backend/teams', ['as' => 'backend.teams.index', 'uses' => 'TeamsController@index']);
    Route::get('backend/teams/manage', ['as' => 'backend.teams.manage', 'uses' => 'TeamsController@index']);
    Route::get('backend/team/create', ['as' => 'backend.teams.create', 'uses' => 'TeamsController@create']);
    Route::get('backend/team/{teamId}', ['as' => 'backend.teams.show', 'uses' => 'TeamsController@show']);
    Route::patch('backend/team/{teamId}', ['as' => 'backend.teams.patch', 'uses' => 'TeamsController@update']);
    Route::put('backend/team/{teamId}', ['as' => 'backend.teams.update', 'uses' => 'TeamsController@update']);
    Route::delete('backend/team/{teamId}', ['as' => 'backend.teams.destroy', 'uses' => 'TeamsController@destroy']);
    Route::get('backend/team/{teamId}/edit', ['as' => 'backend.teams.edit', 'uses' => 'TeamsController@edit']);
    Route::get('backend/team/{teamId}/confirm-delete', ['as' => 'backend.teams.confirm-delete', 'uses' => 'TeamsController@getModalDelete']);
    Route::get('backend/team/{teamId}/delete', ['as' => 'backend.teams.delete', 'uses' => 'TeamsController@destroy']);


});
