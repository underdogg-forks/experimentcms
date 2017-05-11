<?php

namespace Modules\Leads\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Leads\Entities\LeadSource;
use Modules\Leads\Repositories\LeadSourceRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class LeadSourceController extends AdminBaseController
{
    /**
     * @var LeadSourceRepository
     */
    private $leadsource;

    public function __construct(LeadSourceRepository $leadsource)
    {
        parent::__construct();

        $this->leadsource = $leadsource;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$leadsources = $this->leadsource->all();

        return view('leads::admin.leadsources.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('leads::admin.leadsources.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->leadsource->create($request->all());

        return redirect()->route('admin.leads.leadsource.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('leads::leadsources.title.leadsources')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  LeadSource $leadsource
     * @return Response
     */
    public function edit(LeadSource $leadsource)
    {
        return view('leads::admin.leadsources.edit', compact('leadsource'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  LeadSource $leadsource
     * @param  Request $request
     * @return Response
     */
    public function update(LeadSource $leadsource, Request $request)
    {
        $this->leadsource->update($leadsource, $request->all());

        return redirect()->route('admin.leads.leadsource.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('leads::leadsources.title.leadsources')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  LeadSource $leadsource
     * @return Response
     */
    public function destroy(LeadSource $leadsource)
    {
        $this->leadsource->destroy($leadsource);

        return redirect()->route('admin.leads.leadsource.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('leads::leadsources.title.leadsources')]));
    }
}
