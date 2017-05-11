<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/email'], function (Router $router) {
    $router->bind('mailbox', function ($id) {
        return app('Modules\Email\Repositories\MailboxRepository')->find($id);
    });
    $router->get('mailboxes', [
        'as' => 'admin.email.mailbox.index',
        'uses' => 'MailboxController@index',
        'middleware' => 'can:email.mailboxes.index'
    ]);
    $router->get('mailboxes/create', [
        'as' => 'admin.email.mailbox.create',
        'uses' => 'MailboxController@create',
        'middleware' => 'can:email.mailboxes.create'
    ]);
    $router->post('mailboxes', [
        'as' => 'admin.email.mailbox.store',
        'uses' => 'MailboxController@store',
        'middleware' => 'can:email.mailboxes.create'
    ]);
    $router->get('mailboxes/{mailbox}/edit', [
        'as' => 'admin.email.mailbox.edit',
        'uses' => 'MailboxController@edit',
        'middleware' => 'can:email.mailboxes.edit'
    ]);
    $router->put('mailboxes/{mailbox}', [
        'as' => 'admin.email.mailbox.update',
        'uses' => 'MailboxController@update',
        'middleware' => 'can:email.mailboxes.edit'
    ]);
    $router->delete('mailboxes/{mailbox}', [
        'as' => 'admin.email.mailbox.destroy',
        'uses' => 'MailboxController@destroy',
        'middleware' => 'can:email.mailboxes.destroy'
    ]);
    $router->bind('mailtype', function ($id) {
        return app('Modules\Email\Repositories\MailtypeRepository')->find($id);
    });
    $router->get('mailtypes', [
        'as' => 'admin.email.mailtype.index',
        'uses' => 'MailtypeController@index',
        'middleware' => 'can:email.mailtypes.index'
    ]);
    $router->get('mailtypes/create', [
        'as' => 'admin.email.mailtype.create',
        'uses' => 'MailtypeController@create',
        'middleware' => 'can:email.mailtypes.create'
    ]);
    $router->post('mailtypes', [
        'as' => 'admin.email.mailtype.store',
        'uses' => 'MailtypeController@store',
        'middleware' => 'can:email.mailtypes.create'
    ]);
    $router->get('mailtypes/{mailtype}/edit', [
        'as' => 'admin.email.mailtype.edit',
        'uses' => 'MailtypeController@edit',
        'middleware' => 'can:email.mailtypes.edit'
    ]);
    $router->put('mailtypes/{mailtype}', [
        'as' => 'admin.email.mailtype.update',
        'uses' => 'MailtypeController@update',
        'middleware' => 'can:email.mailtypes.edit'
    ]);
    $router->delete('mailtypes/{mailtype}', [
        'as' => 'admin.email.mailtype.destroy',
        'uses' => 'MailtypeController@destroy',
        'middleware' => 'can:email.mailtypes.destroy'
    ]);
// append


});
