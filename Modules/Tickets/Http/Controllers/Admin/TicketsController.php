<?php

namespace Modules\Tickets\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Tickets\Entities\Ticket;
use Modules\Tickets\Repositories\TicketRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class TicketController extends AdminBaseController
{
    /**
     * @var TicketRepository
     */
    private $ticket;

    public function __construct(TicketRepository $ticket)
    {
        parent::__construct();

        $this->ticket = $ticket;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$tickets = $this->ticket->all();

        return view('tickets::admin.tickets.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tickets::admin.tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->ticket->create($request->all());

        return redirect()->route('admin.tickets.ticket.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('tickets::tickets.title.tickets')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Ticket $ticket
     * @return Response
     */
    public function edit(Ticket $ticket)
    {
        return view('tickets::admin.tickets.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Ticket $ticket
     * @param  Request $request
     * @return Response
     */
    public function update(Ticket $ticket, Request $request)
    {
        $this->ticket->update($ticket, $request->all());

        return redirect()->route('admin.tickets.ticket.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('tickets::tickets.title.tickets')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Ticket $ticket
     * @return Response
     */
    public function destroy(Ticket $ticket)
    {
        $this->ticket->destroy($ticket);

        return redirect()->route('admin.tickets.ticket.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('tickets::tickets.title.tickets')]));
    }
}
