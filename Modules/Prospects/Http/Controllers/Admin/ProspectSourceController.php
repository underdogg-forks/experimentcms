<?php

namespace Modules\Prospects\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Prospects\Entities\ProspectSource;
use Modules\Prospects\Repositories\ProspectSourceRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class ProspectSourceController extends AdminBaseController
{
    /**
     * @var ProspectSourceRepository
     */
    private $prospectsource;

    public function __construct(ProspectSourceRepository $prospectsource)
    {
        parent::__construct();

        $this->prospectsource = $prospectsource;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$prospectsources = $this->prospectsource->all();

        return view('prospects::admin.prospectsources.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('prospects::admin.prospectsources.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->prospectsource->create($request->all());

        return redirect()->route('admin.prospects.prospectsource.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('prospects::prospectsources.title.prospectsources')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  ProspectSource $prospectsource
     * @return Response
     */
    public function edit(ProspectSource $prospectsource)
    {
        return view('prospects::admin.prospectsources.edit', compact('prospectsource'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProspectSource $prospectsource
     * @param  Request $request
     * @return Response
     */
    public function update(ProspectSource $prospectsource, Request $request)
    {
        $this->prospectsource->update($prospectsource, $request->all());

        return redirect()->route('admin.prospects.prospectsource.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('prospects::prospectsources.title.prospectsources')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  ProspectSource $prospectsource
     * @return Response
     */
    public function destroy(ProspectSource $prospectsource)
    {
        $this->prospectsource->destroy($prospectsource);

        return redirect()->route('admin.prospects.prospectsource.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('prospects::prospectsources.title.prospectsources')]));
    }
}
