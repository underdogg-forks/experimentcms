<?php

Route::group(['middleware' => 'auth', 'namespace' => 'Modules\Employees\Http\Controllers'], function()
{
Route::get('backend/staff', ['as'=> 'backend.staff.index', 'uses' => 'StaffController@index']);
Route::post('backend/staff', ['as'=> 'backend.staff.store', 'uses' => 'StaffController@store']);
Route::get('backend/staff/create', ['as'=> 'backend.staff.create', 'uses' => 'StaffController@create']);
Route::put('backend/staff/{staff}', ['as'=> 'backend.staff.update', 'uses' => 'StaffController@update']);
Route::patch('backend/staff/{staff}', ['as'=> 'backend.staff.update', 'uses' => 'StaffController@update']);
Route::delete('backend/staff/{staff}', ['as'=> 'backend.staff.destroy', 'uses' => 'StaffController@destroy']);
Route::get('backend/staff/{staff}', ['as'=> 'backend.staff.show', 'uses' => 'StaffController@show']);
Route::get('backend/staff/{staff}/edit', ['as'=> 'backend.staff.edit', 'uses' => 'StaffController@edit']);
});
