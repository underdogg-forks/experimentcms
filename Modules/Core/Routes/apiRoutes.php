<?php

Route::group(['middleware' => 'api', 'namespace' => 'Modules\Core\Http\Controllers'], function () {
    Route::group(['prefix' => 'api'], function () {
        Route::get('companiesdata', ['as' => 'api.companies.data', 'uses' => 'CompaniesController@anyData']);
    }); // End of ADMIN group
});
