<?php

namespace Modules\Core\Http\Controllers;

use Modules\Core\DataTables\CompaniesDataTable;
use Modules\Core\Models\Company;
use Yajra\Datatables\Services\DataTable;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class CompaniesController extends Controller
{
    /** @var  DepartmentRepository */
    private $companiesRepository;

    public function __construct()
    {
        //DepartmentRepository $companiesRepo
        //$this->companiesRepository = $companiesRepo;
    }


    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('core::companies.index');
    }


    public function anyData()
    {
        $companies = Company::select(['id', 'name']);
        return Datatables::of($companies)
            ->addColumn('companiesnamelink', function ($companies) {
                return '<a href="/backend/companies/' . $companies->id . '" ">' . $companies->name . '</a>';
            })
            ->addColumn('actions', function ($companies) {
                return '
                <form action="' . route('backend.companies.destroy', [$companies->id]) . '" method="POST">
                <div class=\'btn-group\'>
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="' . route('backend.companies.edit', [$companies->id]) . '" class=\'btn btn-success btn-xs\'>Edit</a>
                    <input type="submit" name="submit" value="Delete" class="btn btn-danger btn-xs" onClick="return confirm(\'Are you sure?\')"">
                </div>
                </form>';
            })
            ->make(true);
    }


    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('core::companies.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('core::companies.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('core::companies.edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
