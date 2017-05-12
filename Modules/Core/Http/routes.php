<?php
use Illuminate\Routing\Router;
/** @var Router $router */


Route::get('companies', [
    'as' => 'admin.companies.companies.index',
    'uses' => 'CompaniesController@index',
    //'middleware' => 'can:companies.companies.index'
]);


Route::get('getcompany', ['as' => 'getcompany', 'uses' => 'Admin\helpdesk\SettingsController@getcompany']); // direct to company setting page
Route::patch('postcompany/{id}', 'Admin\helpdesk\SettingsController@postcompany'); // Updating the Company table with requests


Route::group(['prefix' =>'/companies'], function (Router $router) {
    $router->bind('company', function ($id) {
        return app('Modules\Core\Repositories\CompanyRepository')->find($id);
    });
    $router->get('companies', [
        'as' => 'admin.companies.company.index',
        'uses' => 'CompaniesController@index',
        //'middleware' => 'can:companies.companies.index'
    ]);
    $router->get('companies/create', [
        'as' => 'admin.companies.company.create',
        'uses' => 'CompaniesController@create',
        //'middleware' => 'can:companies.companies.create'
    ]);
    $router->post('companies', [
        'as' => 'admin.companies.company.store',
        'uses' => 'CompaniesController@store',
        //'middleware' => 'can:companies.companies.create'
    ]);
    $router->get('companies/{company}/edit', [
        'as' => 'admin.companies.company.edit',
        'uses' => 'CompaniesController@edit',
        //'middleware' => 'can:companies.companies.edit'
    ]);
    $router->put('companies/{company}', [
        'as' => 'admin.companies.company.update',
        'uses' => 'CompaniesController@update',
        //'middleware' => 'can:companies.companies.edit'
    ]);
    $router->delete('companies/{company}', [
        'as' => 'admin.companies.company.destroy',
        'uses' => 'CompaniesController@destroy',
        //'middleware' => 'can:companies.companies.destroy'
    ]);
// append

});
