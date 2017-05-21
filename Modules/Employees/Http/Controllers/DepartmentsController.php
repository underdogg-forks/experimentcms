<?php

namespace Modules\Employees\Http\Controllers;

use Modules\Employees\DataTables\DepartmentsDataTable;
use Modules\Employees\Models\Department;
use Yajra\Datatables\Services\DataTable;
use Yajra\Datatables\Facades\Datatables;
use App\Http\Requests;
use Modules\Employees\Requests\CreateDepartmentsRequest;
use Modules\Employees\Requests\Department\StoreDepartmentRequest;
use Modules\Employees\Requests\UpdateDepartmentsRequest;
use Modules\Employees\Repositories\DepartmentRepository;
use Flash;
use Illuminate\Routing\Controller;

use Response;

class DepartmentsController extends Controller
{
    /** @var  DepartmentRepository */
    private $departmentsRepository;

    public function __construct(DepartmentRepository $departmentsRepo)
    {
        $this->departmentsRepository = $departmentsRepo;
    }

    /**
     * Display a listing of the Departments.
     *
     * @param DepartmentsDataTable $departmentsDataTable
     * @return Response
     */
    public function index()
    {
        return view('employees::departments.index');
    }




    public function anyData()
    {
        //$canUpdateStaff = auth()->user()->can('update-user');
        //Auth::guard($guard)->user()->can('update-user');
        $departments = Department::select(['id', 'name', 'departmenttype', 'isdefault', 'slaplan_id', 'manager_id']);
        return Datatables::of($departments)

            ->addColumn('departmentsnamelink', function ($departments) {
                return '<a href="adminpanel/departments/' . $departments->id . '" ">' . $departments->name . '</a>';
            })
            ->addColumn('departmentstypelink', function ($departments) {
                return '<a href="adminpanel/departments/' . $departments->id . '" ">' . $departments->departmenttype . '</a>';
            })

            ->addColumn('slaplanlink', function ($departments) {
                return $departments->slaplan_id;
            })
            ->addColumn('departmentmanagerlink', function ($departments) {
                return $departments->manager_id;
            })

            ->addColumn('actions', function ($departments) {
                return '
                <form action="' . route('backend.departments.destroy', [$departments->id]) .'" method="POST">
                <div class=\'btn-group\'>
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="' . route('backend.departments.edit', [$departments->id]) . '" class=\'btn btn-success btn-xs\'>Edit</a>
                    <input type="submit" name="submit" value="Delete" class="btn btn-danger btn-xs" onClick="return confirm(\'Are you sure?\')"">
                </div>
                </form>';
            })
            ->make(true);
    }



    /**
     * Show the form for creating a new Departments.
     *
     * @return Response
     */
    public function create()
    {
        return view('employees::departments.create');
    }

    /**
     * Store a newly created Departments in storage.
     *
     * @param CreateDepartmentsRequest $request
     *
     * @return Response
     */
    public function store(CreateDepartmentsRequest $request)
    {
        $input = $request->all();

        $departments = $this->departmentsRepository->create($input);

        Flash::success('Department saved successfully.');

        return redirect(route('backend.departments.index'));
    }

    /**
     * Display the specified Departments.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $departments = $this->departmentsRepository->findWithoutFail($id);

        if (empty($departments)) {
            Flash::error('Department not found');

            return redirect(route('backend.departments.index'));
        }

        return view('employees::departments.show')->with('departments', $departments);
    }

    /**
     * Show the form for editing the specified Departments.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $departments = $this->departmentsRepository->findWithoutFail($id);

        if (empty($departments)) {
            Flash::error('Department not found');

            return redirect(route('backend.departments.index'));
        }

        return view('employees::departments.edit')->with('departments', $departments);
    }

    /**
     * Update the specified Departments in storage.
     *
     * @param  int              $id
     * @param UpdateDepartmentsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDepartmentsRequest $request)
    {
        $departments = $this->departmentsRepository->findWithoutFail($id);

        if (empty($departments)) {
            Flash::error('Department not found');

            return redirect(route('backend.departments.index'));
        }

        $departments = $this->departmentsRepository->update($request->all(), $id);

        Flash::success('Departments updated successfully.');

        return redirect(route('backend.departments.index'));
    }

    /**
     * Remove the specified Departments from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $departments = $this->departmentsRepository->findWithoutFail($id);

        if (empty($departments)) {
            Flash::error('Department not found');

            return redirect(route('backend.departments.index'));
        }

        $this->departmentsRepository->delete($id);

        Flash::success('Departments deleted successfully.');

        return redirect(route('backend.departments.index'));
    }
}
