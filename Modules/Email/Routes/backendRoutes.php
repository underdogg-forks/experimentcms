<?php

use Illuminate\Routing\Router;

/** @var Router $router */


Route::post('validating-email-settings', ['as' => 'validating.email.settings', 'uses' => '\Modules\Email\Http\Controllers\MailboxesController@validatingMailboxSettings']); // route to check email input validation
Route::post('validating-email-settings-on-update/{id}', ['as' => 'validating.email.settings.update', 'uses' => '\Modules\Email\Http\Controllers\MailboxesController@validatingMailboxSettingsUpdate']); // route to check email input validation

Route::get('getemail', 'Admin\helpdesk\SettingsController@getemail'); // direct to email setting page
Route::patch('postemail/{id}', 'Admin\helpdesk\SettingsController@postemail'); // Updating the Email table with requests


Route::group(['prefix' => 'mailpanel'], function () {
    //Route::resource('mailboxes', '\Modules\Email\Http\Controllers\MailboxesController');
    Route::resource('mailboxes', '\Modules\Email\Http\Controllers\MailboxesController');

    Route::get('/', [
        'as' => 'backend.mailboxes.mailpanel',
        'uses' => '\Modules\Email\Http\Controllers\MailboxesController@maildashboard',
        //'middleware' => 'can:mailboxes.mailboxes.index'
    ]);

    Route::get('autoresponder', ['as' => 'autoresponder', 'uses' => 'AutoResponsesController@getresponder']); // direct to responder setting page
    Route::patch('postresponder/{id}', 'AutoResponsesController@postresponder'); // Updating the Responder table with requests


    Route::group(['prefix' => '/inbox'], function () {

        Route::resource('emailmessages', 'EMailController');

        Route::get('/', [
            'as' => 'backend.mailpanel.mailboxes.inboxall',
            'uses' => 'EMailController@inboxall',
            //'middleware' => 'can:mailboxes.mailboxes.index'
        ]);


        Route::get('/{id}', [
            'as' => 'backend.mailpanel.mailboxes.inbox',
            'uses' => 'EMailController@inbox',
            //'middleware' => 'can:mailboxes.mailboxes.index'
        ]);
    });


    Route::group(['prefix' => '/mailbanlist'], function () {
        Route::resource('banlist', 'BanlistController'); // in banlist module, for CRUD
        Route::get('/', [
            'as' => 'backend.mailpanel.mailbanlist.manage',
            'uses' => 'BanlistController@index',
            //'middleware' => 'can:mailboxes.mailboxes.index'
        ]);
    });

    Route::group(['prefix' => '/maildiagno'], function () {
        //Route::get('getdiagno', 'Admin\helpdesk\TemplateController@formDiagno'); // for getting form for diagnostic
        //Route::post('postdiagno', 'Admin\helpdesk\TemplateController@postDiagno'); // for getting form for diagnostic

        //getmaildiagno
        Route::get('/getmaildiagno', [
            'as' => 'backend.mailpanel.getmaildiagno',
            'uses' => 'MailTemplatesController@formDiagno',
            //'middleware' => 'can:mailboxes.mailboxes.index'
        ]);

        Route::get('/postdiagno', [
            'as' => 'backend.mailpanel.postmaildiagno',
            'uses' => 'MailTemplatesController@postDiagno',
            //'middleware' => 'can:mailboxes.mailboxes.index'
        ]);
    });

    Route::group(['prefix' => '/mailtemplates'], function () {
        Route::resource('mailtemplates', 'MailTemplatesController'); // in template module, for CRUD

        Route::get('/', [
            'as' => 'backend.mailpanel.mailtemplates.manage',
            'uses' => 'MailTemplatesController@index',
            //'middleware' => 'can:mailboxes.mailboxes.index'
        ]);

        Route::get('/create', [
            'as' => 'mailpanel.mailtemplates.create',
            'uses' => 'MailTemplatesController@create',
            //'middleware' => 'can:mailboxes.mailboxes.index'
        ]);

        Route::get('/{mailtemplate}/edit', [
            'as' => 'mailpanel.mailtemplates.edit',
            'uses' => 'MailTemplatesController@edit',
            //'middleware' => 'can:mailboxes.mailboxes.edit'
        ]);

        Route::delete('/{mailtemplate}', [
            'as' => 'mailpanel.mailtemplates.destroy',
            'uses' => 'MailTemplatesController@destroy',
            //'middleware' => 'can:mailboxes.mailboxes.destroy'
        ]);
    });


    Route::group(['prefix' => '/mailtemplategroups'], function () {
        Route::resource('mailtemplategroups', 'MailTemplateGroupsController'); // in template module, for CRUD

        Route::get('/', [
            'as' => 'backend.mailpanel.mailtemplategroups.manage',
            'uses' => 'MailTemplateGroupsController@index',
            //'middleware' => 'can:mailboxes.mailboxes.index'
        ]);
    });


    Route::group(['prefix' => '/autoresponses'], function () {
        Route::resource('autoresponses', 'AutoResponsesController'); // in template module, for CRUD

        Route::get('/', [
            'as' => 'backend.mailpanel.autoresponses.manage',
            'uses' => 'AutoResponsesController@index',
            //'middleware' => 'can:mailboxes.mailboxes.index'
        ]);
    });


    Route::group(['prefix' => '/mailrules'], function () {
        Route::resource('mailrules', 'MailRulesController'); // in template module, for CRUD

        Route::get('/', [
            'as' => 'backend.mailpanel.mailrules.manage',
            'uses' => 'MailRulesController@index',
            //'middleware' => 'can:mailboxes.mailboxes.index'
        ]);
    });

    Route::group(['prefix' => '/breaklines'], function () {
        Route::resource('breaklines', 'BreakLinesController'); // in template module, for CRUD

        Route::get('/', [
            'as' => 'backend.mailpanel.breaklines.manage',
            'uses' => 'BreakLinesController@index',
            //'middleware' => 'can:mailboxes.mailboxes.index'
        ]);
    });


    Route::group(['prefix' => '/mailboxes'], function () {
        //Route::resource('mailboxes', '\Modules\Email\Http\Controllers\MailboxesController');

        Route::get('/', [
            'as' => 'backend.mailboxes.mailboxes.manage',
            'uses' => '\Modules\Email\Http\Controllers\MailboxesController@manage',
            //'middleware' => 'can:mailboxes.mailboxes.index'
        ]);

        Route::get('/manage', [
            'as' => 'backend.mailboxes.mailboxes.manage',
            'uses' => '\Modules\Email\Http\Controllers\MailboxesController@manage',
            //'middleware' => 'can:mailboxes.mailboxes.create'
        ]);

        /*        Route::get('/manage', [
                    'as' => 'backend.mailboxes.mailboxes.manage',
                    'uses' => '\Modules\Email\Http\Controllers\MailboxesController@manage',
                    //'middleware' => 'can:mailboxes.mailboxes.index'
                ]);*/
    });

    Route::group(['prefix' => '/mailboxes'], function () {
        Route::resource('mailboxes', '\Modules\Email\Http\Controllers\MailboxesController');

        Route::get('/manage', [
            'as' => 'backend.mailboxes.index',
            'uses' => '\Modules\Email\Http\Controllers\MailboxesController@index',
            //'middleware' => 'can:mailboxeses.index'
        ]);


        Route::get('/create', [
            'as' => 'backend.mailboxes.mailbox.create',
            'uses' => '\Modules\Email\Http\Controllers\MailboxesController@create',
            //'middleware' => 'can:mailboxes.mailboxes.create'
        ]);
        Route::post('/', [
            'as' => 'backend.mailboxes.mailbox.store',
            'uses' => '\Modules\Email\Http\Controllers\MailboxesController@store',
            //'middleware' => 'can:mailboxes.mailboxes.store'
        ]);
        Route::get('/{mailbox}/edit', [
            'as' => 'backend.mailboxes.mailbox.edit',
            'uses' => '\Modules\Email\Http\Controllers\MailboxesController@edit',
            //'middleware' => 'can:mailboxes.mailboxes.edit'
        ]);
        Route::put('/{mailbox}', [
            'as' => 'backend.mailboxes.mailbox.update',
            'uses' => '\Modules\Email\Http\Controllers\MailboxesController@update',
            //'middleware' => 'can:mailboxes.mailboxes.update'
        ]);
        Route::delete('/{mailbox}', [
            'as' => 'backend.mailboxes.mailbox.destroy',
            'uses' => '\Modules\Email\Http\Controllers\MailboxesController@destroy',
            //'middleware' => 'can:mailboxes.mailboxes.destroy'
        ]);
        // append
    });

    // append


}); // End of MailPanel group


$router->group(['prefix' => '/mailpanel'], function (Router $router) {

    $router->get('mailboxes/create', [
        'as' => 'backend.mailboxes.create',
        'uses' => '\Modules\Email\Http\Controllers\MailboxesController@create',
        //'middleware' => 'can:mailboxeses.create'
    ]);
    $router->post('mailboxes', [
        'as' => 'backend.mailboxes.store',
        'uses' => '\Modules\Email\Http\Controllers\MailboxesController@store',
        //'middleware' => 'can:mailboxeses.create'
    ]);
    $router->get('mailboxes/{mailbox}/edit', [
        'as' => 'backend.mailboxes.edit',
        'uses' => '\Modules\Email\Http\Controllers\MailboxesController@edit',
        //'middleware' => 'can:mailboxeses.edit'
    ]);
    $router->put('mailboxes/{mailbox}', [
        'as' => 'backend.mailboxes.update',
        'uses' => '\Modules\Email\Http\Controllers\MailboxesController@update',
        //'middleware' => 'can:mailboxeses.edit'
    ]);
    $router->delete('mailboxes/{mailbox}', [
        'as' => 'backend.mailboxes.destroy',
        'uses' => '\Modules\Email\Http\Controllers\MailboxesController@destroy',
        //'middleware' => 'can:mailboxeses.destroy'
    ]);
    $router->bind('mailboxprotocol', function ($id) {
        return app('Modules\Email\Repositories\MailBoxTypeRepository')->find($id);
    });
    $router->get('mailboxprotocols', [
        'as' => 'backend.mailboxestype.index',
        'uses' => '\Modules\Email\Http\Controllers\MailBoxTypeController@index',
        'middleware' => 'can:mailboxestypes.index'
    ]);
    $router->get('mailboxprotocols/create', [
        'as' => 'backend.mailboxestype.create',
        'uses' => '\Modules\Email\Http\Controllers\MailBoxTypeController@create',
        'middleware' => 'can:mailboxestypes.create'
    ]);
    $router->post('mailboxprotocols', [
        'as' => 'backend.mailboxestype.store',
        'uses' => '\Modules\Email\Http\Controllers\MailBoxTypeController@store',
        'middleware' => 'can:mailboxestypes.create'
    ]);
    $router->get('mailboxprotocols/{mailboxprotocol}/edit', [
        'as' => 'backend.mailboxestype.edit',
        'uses' => '\Modules\Email\Http\Controllers\MailBoxTypeController@edit',
        'middleware' => 'can:mailboxestypes.edit'
    ]);
    $router->put('mailboxprotocols/{mailboxprotocol}', [
        'as' => 'backend.mailboxestype.update',
        'uses' => '\Modules\Email\Http\Controllers\MailBoxTypeController@update',
        'middleware' => 'can:mailboxestypes.edit'
    ]);
    $router->delete('mailboxprotocols/{mailboxprotocol}', [
        'as' => 'backend.mailboxestype.destroy',
        'uses' => '\Modules\Email\Http\Controllers\MailBoxTypeController@destroy',
        'middleware' => 'can:mailboxestypes.destroy'
    ]);
// append


});
