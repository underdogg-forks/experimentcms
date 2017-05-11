<?php

namespace Modules\Tickets\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Tickets\Entities\TicketSource;
use Modules\Tickets\Repositories\TicketSourceRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class TicketSourceController extends AdminBaseController
{
    /**
     * @var TicketSourceRepository
     */
    private $ticketsource;

    public function __construct(TicketSourceRepository $ticketsource)
    {
        parent::__construct();

        $this->ticketsource = $ticketsource;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$ticketsources = $this->ticketsource->all();

        return view('tickets::admin.ticketsources.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tickets::admin.ticketsources.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->ticketsource->create($request->all());

        return redirect()->route('admin.tickets.ticketsource.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('tickets::ticketsources.title.ticketsources')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  TicketSource $ticketsource
     * @return Response
     */
    public function edit(TicketSource $ticketsource)
    {
        return view('tickets::admin.ticketsources.edit', compact('ticketsource'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TicketSource $ticketsource
     * @param  Request $request
     * @return Response
     */
    public function update(TicketSource $ticketsource, Request $request)
    {
        $this->ticketsource->update($ticketsource, $request->all());

        return redirect()->route('admin.tickets.ticketsource.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('tickets::ticketsources.title.ticketsources')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  TicketSource $ticketsource
     * @return Response
     */
    public function destroy(TicketSource $ticketsource)
    {
        $this->ticketsource->destroy($ticketsource);

        return redirect()->route('admin.tickets.ticketsource.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('tickets::ticketsources.title.ticketsources')]));
    }
}
