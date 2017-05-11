<?php

namespace Modules\Email\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Email\Entities\Mailbox;
use Modules\Email\Repositories\MailboxRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class MailboxController extends AdminBaseController
{
    /**
     * @var MailboxRepository
     */
    private $mailbox;

    public function __construct(MailboxRepository $mailbox)
    {
        parent::__construct();

        $this->mailbox = $mailbox;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$mailboxes = $this->mailbox->all();

        return view('email::admin.mailboxes.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('email::admin.mailboxes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->mailbox->create($request->all());

        return redirect()->route('admin.email.mailbox.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('email::mailboxes.title.mailboxes')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Mailbox $mailbox
     * @return Response
     */
    public function edit(Mailbox $mailbox)
    {
        return view('email::admin.mailboxes.edit', compact('mailbox'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Mailbox $mailbox
     * @param  Request $request
     * @return Response
     */
    public function update(Mailbox $mailbox, Request $request)
    {
        $this->mailbox->update($mailbox, $request->all());

        return redirect()->route('admin.email.mailbox.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('email::mailboxes.title.mailboxes')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Mailbox $mailbox
     * @return Response
     */
    public function destroy(Mailbox $mailbox)
    {
        $this->mailbox->destroy($mailbox);

        return redirect()->route('admin.email.mailbox.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('email::mailboxes.title.mailboxes')]));
    }
}
