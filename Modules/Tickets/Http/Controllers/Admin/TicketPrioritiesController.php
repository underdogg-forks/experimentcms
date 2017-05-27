<?php

namespace Modules\Tickets\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Tickets\Entities\TicketPriority;
use Modules\Tickets\Repositories\TicketPriorityRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class TicketPriorityController extends AdminBaseController
{
    /**
     * @var TicketPriorityRepository
     */
    private $ticketpriority;

    public function __construct(TicketPriorityRepository $ticketpriority)
    {
        parent::__construct();

        $this->ticketpriority = $ticketpriority;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$ticketpriorities = $this->ticketpriority->all();

        return view('tickets::admin.ticketpriorities.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tickets::admin.ticketpriorities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->ticketpriority->create($request->all());

        return redirect()->route('admin.tickets.ticketpriority.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('tickets::ticketpriorities.title.ticketpriorities')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  TicketPriority $ticketpriority
     * @return Response
     */
    public function edit(TicketPriority $ticketpriority)
    {
        return view('tickets::admin.ticketpriorities.edit', compact('ticketpriority'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TicketPriority $ticketpriority
     * @param  Request $request
     * @return Response
     */
    public function update(TicketPriority $ticketpriority, Request $request)
    {
        $this->ticketpriority->update($ticketpriority, $request->all());

        return redirect()->route('admin.tickets.ticketpriority.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('tickets::ticketpriorities.title.ticketpriorities')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  TicketPriority $ticketpriority
     * @return Response
     */
    public function destroy(TicketPriority $ticketpriority)
    {
        $this->ticketpriority->destroy($ticketpriority);

        return redirect()->route('admin.tickets.ticketpriority.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('tickets::ticketpriorities.title.ticketpriorities')]));
    }
}
