<?php

namespace Modules\Tickets\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Tickets\Entities\TicketThread;
use Modules\Tickets\Repositories\TicketThreadRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class TicketThreadController extends AdminBaseController
{
    /**
     * @var TicketThreadRepository
     */
    private $ticketthread;

    public function __construct(TicketThreadRepository $ticketthread)
    {
        parent::__construct();

        $this->ticketthread = $ticketthread;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$ticketthreads = $this->ticketthread->all();

        return view('tickets::admin.ticketthreads.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tickets::admin.ticketthreads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->ticketthread->create($request->all());

        return redirect()->route('admin.tickets.ticketthread.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('tickets::ticketthreads.title.ticketthreads')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  TicketThread $ticketthread
     * @return Response
     */
    public function edit(TicketThread $ticketthread)
    {
        return view('tickets::admin.ticketthreads.edit', compact('ticketthread'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TicketThread $ticketthread
     * @param  Request $request
     * @return Response
     */
    public function update(TicketThread $ticketthread, Request $request)
    {
        $this->ticketthread->update($ticketthread, $request->all());

        return redirect()->route('admin.tickets.ticketthread.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('tickets::ticketthreads.title.ticketthreads')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  TicketThread $ticketthread
     * @return Response
     */
    public function destroy(TicketThread $ticketthread)
    {
        $this->ticketthread->destroy($ticketthread);

        return redirect()->route('admin.tickets.ticketthread.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('tickets::ticketthreads.title.ticketthreads')]));
    }
}
