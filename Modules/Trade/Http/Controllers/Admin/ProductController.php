<?php

namespace Modules\Trade\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Trade\Entities\Product;
use Modules\Trade\Repositories\ProductRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class ProductController extends AdminBaseController
{
    /**
     * @var ProductRepository
     */
    private $product;

    public function __construct(ProductRepository $product)
    {
        parent::__construct();

        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$products = $this->product->all();

        return view('trade::admin.products.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('trade::admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->product->create($request->all());

        return redirect()->route('admin.trade.product.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('trade::products.title.products')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Product $product
     * @return Response
     */
    public function edit(Product $product)
    {
        return view('trade::admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Product $product
     * @param  Request $request
     * @return Response
     */
    public function update(Product $product, Request $request)
    {
        $this->product->update($product, $request->all());

        return redirect()->route('admin.trade.product.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('trade::products.title.products')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Product $product
     * @return Response
     */
    public function destroy(Product $product)
    {
        $this->product->destroy($product);

        return redirect()->route('admin.trade.product.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('trade::products.title.products')]));
    }
}
