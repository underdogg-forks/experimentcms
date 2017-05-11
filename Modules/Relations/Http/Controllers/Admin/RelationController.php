<?php

namespace Modules\Relations\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Relations\Models\Relation;
use Modules\Relations\Repositories\RelationRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class RelationController extends AdminBaseController
{
    /**
     * @var RelationRepository
     */
    private $relation;

    public function __construct(RelationRepository $relation)
    {
        parent::__construct();

        $this->relation = $relation;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$relations = $this->relation->all();

        return view('relations::admin.relations.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('relations::admin.relations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->relation->create($request->all());

        return redirect()->route('admin.relations.relation.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('relations::relations.title.relations')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Relation $relation
     * @return Response
     */
    public function edit(Relation $relation)
    {
        return view('relations::admin.relations.edit', compact('relation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Relation $relation
     * @param  Request $request
     * @return Response
     */
    public function update(Relation $relation, Request $request)
    {
        $this->relation->update($relation, $request->all());

        return redirect()->route('admin.relations.relation.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('relations::relations.title.relations')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Relation $relation
     * @return Response
     */
    public function destroy(Relation $relation)
    {
        $this->relation->destroy($relation);

        return redirect()->route('admin.relations.relation.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('relations::relations.title.relations')]));
    }
}
