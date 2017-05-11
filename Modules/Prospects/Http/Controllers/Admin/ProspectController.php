<?php

namespace Modules\Prospects\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Prospects\Entities\Prospect;
use Modules\Prospects\Repositories\ProspectRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class ProspectController extends AdminBaseController
{
    /**
     * @var ProspectRepository
     */
    private $prospect;

    public function __construct(ProspectRepository $prospect)
    {
        parent::__construct();

        $this->prospect = $prospect;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$prospects = $this->prospect->all();

        return view('prospects::admin.prospects.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('prospects::admin.prospects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->prospect->create($request->all());

        return redirect()->route('admin.prospects.prospect.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('prospects::prospects.title.prospects')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Prospect $prospect
     * @return Response
     */
    public function edit(Prospect $prospect)
    {
        return view('prospects::admin.prospects.edit', compact('prospect'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Prospect $prospect
     * @param  Request $request
     * @return Response
     */
    public function update(Prospect $prospect, Request $request)
    {
        $this->prospect->update($prospect, $request->all());

        return redirect()->route('admin.prospects.prospect.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('prospects::prospects.title.prospects')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Prospect $prospect
     * @return Response
     */
    public function destroy(Prospect $prospect)
    {
        $this->prospect->destroy($prospect);

        return redirect()->route('admin.prospects.prospect.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('prospects::prospects.title.prospects')]));
    }
}
