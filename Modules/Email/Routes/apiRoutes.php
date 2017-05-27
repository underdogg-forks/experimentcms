<?php

use Illuminate\Http\Request;


Route::group(['prefix' => 'api'], function () {

    Route::get('mailboxesdata', [
        'as' => 'api.mailboxes.data',
        'uses' => '\Modules\Email\Http\Controllers\MailboxesController@anyData',
        //'middleware' => 'can:mailboxes.mailboxes.index'
    ]);


    Route::get('banlistdata', [
        'as' => 'api.banlist.data',
        'uses' => 'BanlistController@anyData',
        //'middleware' => 'can:mailboxes.mailboxes.index'
    ]);


    Route::get('breaklinesdata', [
        'as' => 'api.breaklines.data',
        'uses' => 'BreakLinesController@anyData',
        //'middleware' => 'can:mailboxes.mailboxes.index'
    ]);

    Route::get('mailrulesdata', [
        'as' => 'api.mailrules.data',
        'uses' => 'MailRulesController@anyData',
        //'middleware' => 'can:mailboxes.mailboxes.index'
    ]);

    Route::get('mailtemplatesdata', [
        'as' => 'api.api.mailtemplates.data',
        'uses' => 'MailTemplatesController@anyData',
        //'middleware' => 'can:mailboxes.mailboxes.index'
    ]);


}); // End of ADMIN group
