<?php

namespace Modules\Email\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Email\Entities\Mailtype;
use Modules\Email\Repositories\MailtypeRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class MailtypeController extends AdminBaseController
{
    /**
     * @var MailtypeRepository
     */
    private $mailtype;

    public function __construct(MailtypeRepository $mailtype)
    {
        parent::__construct();

        $this->mailtype = $mailtype;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$mailtypes = $this->mailtype->all();

        return view('email::admin.mailtypes.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('email::admin.mailtypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->mailtype->create($request->all());

        return redirect()->route('admin.email.mailtype.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('email::mailtypes.title.mailtypes')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Mailtype $mailtype
     * @return Response
     */
    public function edit(Mailtype $mailtype)
    {
        return view('email::admin.mailtypes.edit', compact('mailtype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Mailtype $mailtype
     * @param  Request $request
     * @return Response
     */
    public function update(Mailtype $mailtype, Request $request)
    {
        $this->mailtype->update($mailtype, $request->all());

        return redirect()->route('admin.email.mailtype.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('email::mailtypes.title.mailtypes')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Mailtype $mailtype
     * @return Response
     */
    public function destroy(Mailtype $mailtype)
    {
        $this->mailtype->destroy($mailtype);

        return redirect()->route('admin.email.mailtype.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('email::mailtypes.title.mailtypes')]));
    }
}
