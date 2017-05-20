<?php

Route::group(['middleware' => 'api', 'namespace' => 'Modules\Employees\Http\Controllers'], function()
{
Route::get('staffdata', ['as'=> 'api.staff.data', 'uses' => 'StaffController@anyData']);
});
