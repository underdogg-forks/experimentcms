<?php

namespace Modules\Trade\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Trade\Entities\ProductCategory;
use Modules\Trade\Repositories\ProductCategoryRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class ProductCategoryController extends AdminBaseController
{
    /**
     * @var ProductCategoryRepository
     */
    private $productcategory;

    public function __construct(ProductCategoryRepository $productcategory)
    {
        parent::__construct();

        $this->productcategory = $productcategory;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$productcategories = $this->productcategory->all();

        return view('trade::admin.productcategories.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('trade::admin.productcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->productcategory->create($request->all());

        return redirect()->route('admin.trade.productcategory.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('trade::productcategories.title.productcategories')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  ProductCategory $productcategory
     * @return Response
     */
    public function edit(ProductCategory $productcategory)
    {
        return view('trade::admin.productcategories.edit', compact('productcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProductCategory $productcategory
     * @param  Request $request
     * @return Response
     */
    public function update(ProductCategory $productcategory, Request $request)
    {
        $this->productcategory->update($productcategory, $request->all());

        return redirect()->route('admin.trade.productcategory.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('trade::productcategories.title.productcategories')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  ProductCategory $productcategory
     * @return Response
     */
    public function destroy(ProductCategory $productcategory)
    {
        $this->productcategory->destroy($productcategory);

        return redirect()->route('admin.trade.productcategory.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('trade::productcategories.title.productcategories')]));
    }
}
