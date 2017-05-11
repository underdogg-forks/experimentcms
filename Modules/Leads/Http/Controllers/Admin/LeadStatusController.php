<?php

namespace Modules\Leads\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Leads\Entities\LeadStatus;
use Modules\Leads\Repositories\LeadStatusRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class LeadStatusController extends AdminBaseController
{
    /**
     * @var LeadStatusRepository
     */
    private $leadstatus;

    public function __construct(LeadStatusRepository $leadstatus)
    {
        parent::__construct();

        $this->leadstatus = $leadstatus;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$leadstatuses = $this->leadstatus->all();

        return view('leads::admin.leadstatuses.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('leads::admin.leadstatuses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->leadstatus->create($request->all());

        return redirect()->route('admin.leads.leadstatus.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('leads::leadstatuses.title.leadstatuses')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  LeadStatus $leadstatus
     * @return Response
     */
    public function edit(LeadStatus $leadstatus)
    {
        return view('leads::admin.leadstatuses.edit', compact('leadstatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  LeadStatus $leadstatus
     * @param  Request $request
     * @return Response
     */
    public function update(LeadStatus $leadstatus, Request $request)
    {
        $this->leadstatus->update($leadstatus, $request->all());

        return redirect()->route('admin.leads.leadstatus.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('leads::leadstatuses.title.leadstatuses')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  LeadStatus $leadstatus
     * @return Response
     */
    public function destroy(LeadStatus $leadstatus)
    {
        $this->leadstatus->destroy($leadstatus);

        return redirect()->route('admin.leads.leadstatus.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('leads::leadstatuses.title.leadstatuses')]));
    }
}
