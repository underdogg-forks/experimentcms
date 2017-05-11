<?php

namespace Modules\Trade\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Trade\Entities\PurchaseOrder;
use Modules\Trade\Repositories\PurchaseOrderRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class PurchaseOrderController extends AdminBaseController
{
    /**
     * @var PurchaseOrderRepository
     */
    private $purchaseorder;

    public function __construct(PurchaseOrderRepository $purchaseorder)
    {
        parent::__construct();

        $this->purchaseorder = $purchaseorder;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$purchaseorders = $this->purchaseorder->all();

        return view('trade::admin.purchaseorders.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('trade::admin.purchaseorders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->purchaseorder->create($request->all());

        return redirect()->route('admin.trade.purchaseorder.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('trade::purchaseorders.title.purchaseorders')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  PurchaseOrder $purchaseorder
     * @return Response
     */
    public function edit(PurchaseOrder $purchaseorder)
    {
        return view('trade::admin.purchaseorders.edit', compact('purchaseorder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PurchaseOrder $purchaseorder
     * @param  Request $request
     * @return Response
     */
    public function update(PurchaseOrder $purchaseorder, Request $request)
    {
        $this->purchaseorder->update($purchaseorder, $request->all());

        return redirect()->route('admin.trade.purchaseorder.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('trade::purchaseorders.title.purchaseorders')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  PurchaseOrder $purchaseorder
     * @return Response
     */
    public function destroy(PurchaseOrder $purchaseorder)
    {
        $this->purchaseorder->destroy($purchaseorder);

        return redirect()->route('admin.trade.purchaseorder.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('trade::purchaseorders.title.purchaseorders')]));
    }
}
