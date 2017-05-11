<?php

namespace Modules\Trade\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Trade\Entities\ProductType;
use Modules\Trade\Repositories\ProductTypeRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class ProductTypeController extends AdminBaseController
{
    /**
     * @var ProductTypeRepository
     */
    private $producttype;

    public function __construct(ProductTypeRepository $producttype)
    {
        parent::__construct();

        $this->producttype = $producttype;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$producttypes = $this->producttype->all();

        return view('trade::admin.producttypes.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('trade::admin.producttypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->producttype->create($request->all());

        return redirect()->route('admin.trade.producttype.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('trade::producttypes.title.producttypes')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  ProductType $producttype
     * @return Response
     */
    public function edit(ProductType $producttype)
    {
        return view('trade::admin.producttypes.edit', compact('producttype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProductType $producttype
     * @param  Request $request
     * @return Response
     */
    public function update(ProductType $producttype, Request $request)
    {
        $this->producttype->update($producttype, $request->all());

        return redirect()->route('admin.trade.producttype.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('trade::producttypes.title.producttypes')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  ProductType $producttype
     * @return Response
     */
    public function destroy(ProductType $producttype)
    {
        $this->producttype->destroy($producttype);

        return redirect()->route('admin.trade.producttype.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('trade::producttypes.title.producttypes')]));
    }
}
