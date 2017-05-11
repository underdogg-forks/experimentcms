<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/tickets'], function (Router $router) {
    $router->bind('ticket', function ($id) {
        return app('Modules\Tickets\Repositories\TicketRepository')->find($id);
    });
    $router->get('tickets', [
        'as' => 'admin.tickets.ticket.index',
        'uses' => 'TicketController@index',
        'middleware' => 'can:tickets.tickets.index'
    ]);
    $router->get('tickets/create', [
        'as' => 'admin.tickets.ticket.create',
        'uses' => 'TicketController@create',
        'middleware' => 'can:tickets.tickets.create'
    ]);
    $router->post('tickets', [
        'as' => 'admin.tickets.ticket.store',
        'uses' => 'TicketController@store',
        'middleware' => 'can:tickets.tickets.create'
    ]);
    $router->get('tickets/{ticket}/edit', [
        'as' => 'admin.tickets.ticket.edit',
        'uses' => 'TicketController@edit',
        'middleware' => 'can:tickets.tickets.edit'
    ]);
    $router->put('tickets/{ticket}', [
        'as' => 'admin.tickets.ticket.update',
        'uses' => 'TicketController@update',
        'middleware' => 'can:tickets.tickets.edit'
    ]);
    $router->delete('tickets/{ticket}', [
        'as' => 'admin.tickets.ticket.destroy',
        'uses' => 'TicketController@destroy',
        'middleware' => 'can:tickets.tickets.destroy'
    ]);
    $router->bind('ticketthread', function ($id) {
        return app('Modules\Tickets\Repositories\TicketThreadRepository')->find($id);
    });
    $router->get('ticketthreads', [
        'as' => 'admin.tickets.ticketthread.index',
        'uses' => 'TicketThreadController@index',
        'middleware' => 'can:tickets.ticketthreads.index'
    ]);
    $router->get('ticketthreads/create', [
        'as' => 'admin.tickets.ticketthread.create',
        'uses' => 'TicketThreadController@create',
        'middleware' => 'can:tickets.ticketthreads.create'
    ]);
    $router->post('ticketthreads', [
        'as' => 'admin.tickets.ticketthread.store',
        'uses' => 'TicketThreadController@store',
        'middleware' => 'can:tickets.ticketthreads.create'
    ]);
    $router->get('ticketthreads/{ticketthread}/edit', [
        'as' => 'admin.tickets.ticketthread.edit',
        'uses' => 'TicketThreadController@edit',
        'middleware' => 'can:tickets.ticketthreads.edit'
    ]);
    $router->put('ticketthreads/{ticketthread}', [
        'as' => 'admin.tickets.ticketthread.update',
        'uses' => 'TicketThreadController@update',
        'middleware' => 'can:tickets.ticketthreads.edit'
    ]);
    $router->delete('ticketthreads/{ticketthread}', [
        'as' => 'admin.tickets.ticketthread.destroy',
        'uses' => 'TicketThreadController@destroy',
        'middleware' => 'can:tickets.ticketthreads.destroy'
    ]);
    $router->bind('tickettype', function ($id) {
        return app('Modules\Tickets\Repositories\TicketTypeRepository')->find($id);
    });
    $router->get('tickettypes', [
        'as' => 'admin.tickets.tickettype.index',
        'uses' => 'TicketTypeController@index',
        'middleware' => 'can:tickets.tickettypes.index'
    ]);
    $router->get('tickettypes/create', [
        'as' => 'admin.tickets.tickettype.create',
        'uses' => 'TicketTypeController@create',
        'middleware' => 'can:tickets.tickettypes.create'
    ]);
    $router->post('tickettypes', [
        'as' => 'admin.tickets.tickettype.store',
        'uses' => 'TicketTypeController@store',
        'middleware' => 'can:tickets.tickettypes.create'
    ]);
    $router->get('tickettypes/{tickettype}/edit', [
        'as' => 'admin.tickets.tickettype.edit',
        'uses' => 'TicketTypeController@edit',
        'middleware' => 'can:tickets.tickettypes.edit'
    ]);
    $router->put('tickettypes/{tickettype}', [
        'as' => 'admin.tickets.tickettype.update',
        'uses' => 'TicketTypeController@update',
        'middleware' => 'can:tickets.tickettypes.edit'
    ]);
    $router->delete('tickettypes/{tickettype}', [
        'as' => 'admin.tickets.tickettype.destroy',
        'uses' => 'TicketTypeController@destroy',
        'middleware' => 'can:tickets.tickettypes.destroy'
    ]);
    $router->bind('ticketstatus', function ($id) {
        return app('Modules\Tickets\Repositories\TicketStatusRepository')->find($id);
    });
    $router->get('ticketstatuses', [
        'as' => 'admin.tickets.ticketstatus.index',
        'uses' => 'TicketStatusController@index',
        'middleware' => 'can:tickets.ticketstatuses.index'
    ]);
    $router->get('ticketstatuses/create', [
        'as' => 'admin.tickets.ticketstatus.create',
        'uses' => 'TicketStatusController@create',
        'middleware' => 'can:tickets.ticketstatuses.create'
    ]);
    $router->post('ticketstatuses', [
        'as' => 'admin.tickets.ticketstatus.store',
        'uses' => 'TicketStatusController@store',
        'middleware' => 'can:tickets.ticketstatuses.create'
    ]);
    $router->get('ticketstatuses/{ticketstatus}/edit', [
        'as' => 'admin.tickets.ticketstatus.edit',
        'uses' => 'TicketStatusController@edit',
        'middleware' => 'can:tickets.ticketstatuses.edit'
    ]);
    $router->put('ticketstatuses/{ticketstatus}', [
        'as' => 'admin.tickets.ticketstatus.update',
        'uses' => 'TicketStatusController@update',
        'middleware' => 'can:tickets.ticketstatuses.edit'
    ]);
    $router->delete('ticketstatuses/{ticketstatus}', [
        'as' => 'admin.tickets.ticketstatus.destroy',
        'uses' => 'TicketStatusController@destroy',
        'middleware' => 'can:tickets.ticketstatuses.destroy'
    ]);
    $router->bind('ticketpriority', function ($id) {
        return app('Modules\Tickets\Repositories\TicketPriorityRepository')->find($id);
    });
    $router->get('ticketpriorities', [
        'as' => 'admin.tickets.ticketpriority.index',
        'uses' => 'TicketPriorityController@index',
        'middleware' => 'can:tickets.ticketpriorities.index'
    ]);
    $router->get('ticketpriorities/create', [
        'as' => 'admin.tickets.ticketpriority.create',
        'uses' => 'TicketPriorityController@create',
        'middleware' => 'can:tickets.ticketpriorities.create'
    ]);
    $router->post('ticketpriorities', [
        'as' => 'admin.tickets.ticketpriority.store',
        'uses' => 'TicketPriorityController@store',
        'middleware' => 'can:tickets.ticketpriorities.create'
    ]);
    $router->get('ticketpriorities/{ticketpriority}/edit', [
        'as' => 'admin.tickets.ticketpriority.edit',
        'uses' => 'TicketPriorityController@edit',
        'middleware' => 'can:tickets.ticketpriorities.edit'
    ]);
    $router->put('ticketpriorities/{ticketpriority}', [
        'as' => 'admin.tickets.ticketpriority.update',
        'uses' => 'TicketPriorityController@update',
        'middleware' => 'can:tickets.ticketpriorities.edit'
    ]);
    $router->delete('ticketpriorities/{ticketpriority}', [
        'as' => 'admin.tickets.ticketpriority.destroy',
        'uses' => 'TicketPriorityController@destroy',
        'middleware' => 'can:tickets.ticketpriorities.destroy'
    ]);
    $router->bind('ticketsource', function ($id) {
        return app('Modules\Tickets\Repositories\TicketSourceRepository')->find($id);
    });
    $router->get('ticketsources', [
        'as' => 'admin.tickets.ticketsource.index',
        'uses' => 'TicketSourceController@index',
        'middleware' => 'can:tickets.ticketsources.index'
    ]);
    $router->get('ticketsources/create', [
        'as' => 'admin.tickets.ticketsource.create',
        'uses' => 'TicketSourceController@create',
        'middleware' => 'can:tickets.ticketsources.create'
    ]);
    $router->post('ticketsources', [
        'as' => 'admin.tickets.ticketsource.store',
        'uses' => 'TicketSourceController@store',
        'middleware' => 'can:tickets.ticketsources.create'
    ]);
    $router->get('ticketsources/{ticketsource}/edit', [
        'as' => 'admin.tickets.ticketsource.edit',
        'uses' => 'TicketSourceController@edit',
        'middleware' => 'can:tickets.ticketsources.edit'
    ]);
    $router->put('ticketsources/{ticketsource}', [
        'as' => 'admin.tickets.ticketsource.update',
        'uses' => 'TicketSourceController@update',
        'middleware' => 'can:tickets.ticketsources.edit'
    ]);
    $router->delete('ticketsources/{ticketsource}', [
        'as' => 'admin.tickets.ticketsource.destroy',
        'uses' => 'TicketSourceController@destroy',
        'middleware' => 'can:tickets.ticketsources.destroy'
    ]);
// append






});
