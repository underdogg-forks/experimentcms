<?php

namespace Modules\Tickets\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Tickets\Entities\TicketType;
use Modules\Tickets\Repositories\TicketTypeRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class TicketTypeController extends AdminBaseController
{
    /**
     * @var TicketTypeRepository
     */
    private $tickettype;

    public function __construct(TicketTypeRepository $tickettype)
    {
        parent::__construct();

        $this->tickettype = $tickettype;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$tickettypes = $this->tickettype->all();

        return view('tickets::admin.tickettypes.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tickets::admin.tickettypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->tickettype->create($request->all());

        return redirect()->route('admin.tickets.tickettype.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('tickets::tickettypes.title.tickettypes')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  TicketType $tickettype
     * @return Response
     */
    public function edit(TicketType $tickettype)
    {
        return view('tickets::admin.tickettypes.edit', compact('tickettype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TicketType $tickettype
     * @param  Request $request
     * @return Response
     */
    public function update(TicketType $tickettype, Request $request)
    {
        $this->tickettype->update($tickettype, $request->all());

        return redirect()->route('admin.tickets.tickettype.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('tickets::tickettypes.title.tickettypes')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  TicketType $tickettype
     * @return Response
     */
    public function destroy(TicketType $tickettype)
    {
        $this->tickettype->destroy($tickettype);

        return redirect()->route('admin.tickets.tickettype.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('tickets::tickettypes.title.tickettypes')]));
    }
}
