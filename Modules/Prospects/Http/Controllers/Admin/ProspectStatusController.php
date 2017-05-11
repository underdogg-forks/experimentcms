<?php

namespace Modules\Prospects\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Prospects\Entities\ProspectStatus;
use Modules\Prospects\Repositories\ProspectStatusRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class ProspectStatusController extends AdminBaseController
{
    /**
     * @var ProspectStatusRepository
     */
    private $prospectstatus;

    public function __construct(ProspectStatusRepository $prospectstatus)
    {
        parent::__construct();

        $this->prospectstatus = $prospectstatus;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$prospectstatuses = $this->prospectstatus->all();

        return view('prospects::admin.prospectstatuses.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('prospects::admin.prospectstatuses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->prospectstatus->create($request->all());

        return redirect()->route('admin.prospects.prospectstatus.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('prospects::prospectstatuses.title.prospectstatuses')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  ProspectStatus $prospectstatus
     * @return Response
     */
    public function edit(ProspectStatus $prospectstatus)
    {
        return view('prospects::admin.prospectstatuses.edit', compact('prospectstatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProspectStatus $prospectstatus
     * @param  Request $request
     * @return Response
     */
    public function update(ProspectStatus $prospectstatus, Request $request)
    {
        $this->prospectstatus->update($prospectstatus, $request->all());

        return redirect()->route('admin.prospects.prospectstatus.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('prospects::prospectstatuses.title.prospectstatuses')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  ProspectStatus $prospectstatus
     * @return Response
     */
    public function destroy(ProspectStatus $prospectstatus)
    {
        $this->prospectstatus->destroy($prospectstatus);

        return redirect()->route('admin.prospects.prospectstatus.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('prospects::prospectstatuses.title.prospectstatuses')]));
    }
}
