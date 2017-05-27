<?php

namespace Modules\Email\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Email\Models\MailBoxProtocols;
use Modules\Email\Repositories\MailBoxTypeRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class MailBoxTypeController extends AdminBaseController
{
    /**
     * @var MailBoxTypeRepository
     */
    private $mailboxprotocol;

    public function __construct(MailBoxTypeRepository $mailboxprotocol)
    {
        parent::__construct();

        $this->mailboxprotocol = $mailboxprotocol;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$mailboxprotocols = $this->mailboxprotocol->all();

        return view('email::admin.mailboxprotocols.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('email::admin.mailboxprotocols.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->mailboxprotocol->create($request->all());

        return redirect()->route('admin.email.mailboxprotocol.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('email::mailboxprotocols.title.mailboxprotocols')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  MailBoxProtocols $mailboxprotocol
     * @return Response
     */
    public function edit(MailBoxProtocols $mailboxprotocol)
    {
        return view('email::admin.mailboxprotocols.edit', compact('mailboxprotocol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  MailBoxProtocols $mailboxprotocol
     * @param  Request $request
     * @return Response
     */
    public function update(MailBoxProtocols $mailboxprotocol, Request $request)
    {
        $this->mailboxprotocol->update($mailboxprotocol, $request->all());

        return redirect()->route('admin.email.mailboxprotocol.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('email::mailboxprotocols.title.mailboxprotocols')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  MailBoxProtocols $mailboxprotocol
     * @return Response
     */
    public function destroy(MailBoxProtocols $mailboxprotocol)
    {
        $this->mailboxprotocol->destroy($mailboxprotocol);

        return redirect()->route('admin.email.mailboxprotocol.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('email::mailboxprotocols.title.mailboxprotocols')]));
    }
}
