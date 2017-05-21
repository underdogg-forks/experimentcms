<?php
use Illuminate\Routing\Router;

/** @var Router $router */
Route::get('/', [
    'uses' => 'PublicController@homepage',
    'as' => 'homepage',
    'middleware' => config('asgard.page.config.middleware'),
]);





Route::get('staff/profile', ['as' => 'staff.profile', 'uses' => 'StaffController@profile']);
Route::patch('staff/profile', ['as' => 'staff.profile.patch', 'uses' => 'StaffController@profileUpdate']);

Route::get('companies', [
    'as' => 'admin.companies.companies.index',
    'uses' => 'CompaniesController@index',
    //'middleware' => 'can:companies.companies.index'
]);


Route::get('getcompany', ['as' => 'getcompany', 'uses' => 'Admin\helpdesk\SettingsController@getcompany']); // direct to company setting page
Route::patch('postcompany/{id}', 'Admin\helpdesk\SettingsController@postcompany'); // Updating the Company table with requests
Route::get('companies/getcompany', ['as' => 'adminpanel', 'uses' => 'CompaniesController@getcompany']);
Route::get('companies/deletelogo', ['as' => 'deletecompanylogo', 'uses' => 'CompaniesController@getcompany']);


// Menu routes
Route::post('menus', ['as' => 'admin.menus.save', 'uses' => 'MenusController@save']);
Route::get('menus', ['as' => 'admin.menus.index', 'uses' => 'MenusController@index']);
Route::get('menus/getData/{menuId}', ['as' => 'admin.menus.get-data', 'uses' => 'MenusController@getData']);
Route::get('menus/{menuId}/confirm-delete', ['as' => 'admin.menus.confirm-delete', 'uses' => 'MenusController@getModalDelete']);
Route::get('menus/{menuId}/delete', ['as' => 'admin.menus.delete', 'uses' => 'MenusController@destroy']);
// Modules routes
Route::get('modules', ['as' => 'admin.modules.index', 'uses' => 'ModulesController@index']);
Route::get('modules/{slug}/initialize', ['as' => 'admin.modules.initialize', 'uses' => 'ModulesController@initialize']);
Route::get('modules/{slug}/uninitialize', ['as' => 'admin.modules.uninitialize', 'uses' => 'ModulesController@uninitialize']);
Route::get('modules/{slug}/enable', ['as' => 'admin.modules.enable', 'uses' => 'ModulesController@enable']);
Route::get('modules/{slug}/disable', ['as' => 'admin.modules.disable', 'uses' => 'ModulesController@disable']);
Route::post('modules/enableSelected', ['as' => 'admin.modules.enable-selected', 'uses' => 'ModulesController@enableSelected']);
Route::post('modules/disableSelected', ['as' => 'admin.modules.disable-selected', 'uses' => 'ModulesController@disableSelected']);
Route::get('modules/optimize', ['as' => 'admin.modules.optimize', 'uses' => 'ModulesController@optimize']);
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
Route::get('queue/{id}', ['as' => 'queue.edit', 'uses' => 'Job\QueueController@edit']);
Route::post('queue/{id}', ['as' => 'queue.update', 'uses' => 'Job\QueueController@update']);
Route::get('queue/{id}/activate', ['as' => 'queue.activate', 'uses' => 'Job\QueueController@activate']);
Route::get('get-ticket-number', ['as' => 'get.ticket.number', 'uses' => 'Admin\helpdesk\SettingsController@getTicketNumber']);
Route::get('genereate-pdf/{threadid}', ['as' => 'thread.pdf', 'uses' => 'Agent\helpdesk\TicketController@pdfThread']);

Route::group(['prefix' => '/companies'], function (Router $router) {
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
