<?php

namespace Modules\Email\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Email\Entities\MailBoxType;
use Modules\Email\Repositories\MailBoxTypeRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class MailBoxTypeController extends AdminBaseController
{
    /**
     * @var MailBoxTypeRepository
     */
    private $mailboxtype;

    public function __construct(MailBoxTypeRepository $mailboxtype)
    {
        parent::__construct();

        $this->mailboxtype = $mailboxtype;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$mailboxtypes = $this->mailboxtype->all();

        return view('email::admin.mailboxtypes.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('email::admin.mailboxtypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->mailboxtype->create($request->all());

        return redirect()->route('admin.email.mailboxtype.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('email::mailboxtypes.title.mailboxtypes')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  MailBoxType $mailboxtype
     * @return Response
     */
    public function edit(MailBoxType $mailboxtype)
    {
        return view('email::admin.mailboxtypes.edit', compact('mailboxtype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  MailBoxType $mailboxtype
     * @param  Request $request
     * @return Response
     */
    public function update(MailBoxType $mailboxtype, Request $request)
    {
        $this->mailboxtype->update($mailboxtype, $request->all());

        return redirect()->route('admin.email.mailboxtype.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('email::mailboxtypes.title.mailboxtypes')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  MailBoxType $mailboxtype
     * @return Response
     */
    public function destroy(MailBoxType $mailboxtype)
    {
        $this->mailboxtype->destroy($mailboxtype);

        return redirect()->route('admin.email.mailboxtype.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('email::mailboxtypes.title.mailboxtypes')]));
    }
}
