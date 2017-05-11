<?php

namespace Modules\Tickets\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Tickets\Entities\TicketStatus;
use Modules\Tickets\Repositories\TicketStatusRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class TicketStatusController extends AdminBaseController
{
    /**
     * @var TicketStatusRepository
     */
    private $ticketstatus;

    public function __construct(TicketStatusRepository $ticketstatus)
    {
        parent::__construct();

        $this->ticketstatus = $ticketstatus;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$ticketstatuses = $this->ticketstatus->all();

        return view('tickets::admin.ticketstatuses.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tickets::admin.ticketstatuses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->ticketstatus->create($request->all());

        return redirect()->route('admin.tickets.ticketstatus.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('tickets::ticketstatuses.title.ticketstatuses')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  TicketStatus $ticketstatus
     * @return Response
     */
    public function edit(TicketStatus $ticketstatus)
    {
        return view('tickets::admin.ticketstatuses.edit', compact('ticketstatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TicketStatus $ticketstatus
     * @param  Request $request
     * @return Response
     */
    public function update(TicketStatus $ticketstatus, Request $request)
    {
        $this->ticketstatus->update($ticketstatus, $request->all());

        return redirect()->route('admin.tickets.ticketstatus.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('tickets::ticketstatuses.title.ticketstatuses')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  TicketStatus $ticketstatus
     * @return Response
     */
    public function destroy(TicketStatus $ticketstatus)
    {
        $this->ticketstatus->destroy($ticketstatus);

        return redirect()->route('admin.tickets.ticketstatus.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('tickets::ticketstatuses.title.ticketstatuses')]));
    }
}
