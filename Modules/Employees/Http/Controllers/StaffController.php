<?php

namespace Modules\Employees\Http\Controllers;

use Modules\Employees\DataTables\StaffDataTable;
use Modules\Employees\Models\Staff;
use Yajra\Datatables\Services\DataTable;
use Yajra\Datatables\Facades\Datatables;
use App\Http\Requests;
use Modules\Employees\Http\Requests\CreateStaffRequest;
use Modules\Employees\Http\Requests\UpdateStaffRequest;
use Modules\Employees\Repositories\StaffRepository;
use Flash;
use Illuminate\Routing\Controller;
use Response;

class StaffController extends Controller
{
    /** @var  StaffRepository */
    private $staffRepository;

    public function __construct(StaffRepository $staffRepo)
    {
        $this->staffRepository = $staffRepo;
    }

    /**
     * Display a listing of the Staff.
     *
     * @param StaffDataTable $staffDataTable
     * @return Response
     */
    public function index(StaffDataTable $staffDataTable)
    {
        return $staffDataTable->render('employees::staff.index');
    }

    public function anyData()
    {
        //->with('addresses')
        $staff = Staff::select(['id', 'firstname', 'lastname', 'email']);
/*        $relations = Relation::with(array('addresses'=>function($query){
            $query->addSelect(array('id','address', 'housenumber', 'postalcode', 'city_id', 'country_id'));
        }))->get('id', 'name', 'shortname', 'relationtype_id');*/

/*
// Example: We only want the title of the posts.
$authors = Author::with(array('posts' => function($query)
{
    // Notice the addition of the author_id field!
    $query->addSelect(array('title', 'author_id'));
}))->get();
 **/



        return Datatables::of($staff)
            ->addColumn('firstname', function ($staff) {
                return '<a href="backend/staff/' . $staff->id . '" ">' . $staff->firstname . '</a>';
            })
            ->addColumn('lastname', function ($staff) {
                return '<a href="backend/staff/' . $staff->id . '" ">' . $staff->lastname . '</a>';
            })
            ->addColumn('email', function ($staff) {
                return '<a href="backend/staff/' . $staff->id . '" ">' . $staff->email . '</a>';
            })

            ->add_column('edit', '
                <a href="{{ route(\'backend.staff.edit\', $id) }}" class="btn btn-success" >Edit</a>')
            ->add_column('delete', '
                <form action="{{ route(\'backend.staff.destroy\', $id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" name="submit" value="Delete" class="btn btn-danger" onClick="return confirm(\'Are you sure?\')"">

            {{csrf_field()}}
            </form>')
            ->make(true);
    }



    /**
     * Show the form for creating a new Staff.
     *
     * @return Response
     */
    public function create()
    {
        return view('employees::staff.create');
    }

    /**
     * Store a newly created Staff in storage.
     *
     * @param CreateStaffRequest $request
     *
     * @return Response
     */
    public function store(CreateStaffRequest $request)
    {
        $input = $request->all();

        $staff = $this->staffRepository->create($input);

        Flash::success('Staff saved successfully.');

        return redirect(route('backend.staff.index'));
    }

    /**
     * Display the specified Staff.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $staff = $this->staffRepository->findWithoutFail($id);

        if (empty($staff)) {
            Flash::error('Staff not found');

            return redirect(route('backend.staff.index'));
        }

        return view('employees::staff.show')->with('staff', $staff);
    }

    /**
     * Show the form for editing the specified Staff.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $staff = $this->staffRepository->findWithoutFail($id);

        if (empty($staff)) {
            Flash::error('Staff not found');

            return redirect(route('backend.staff.index'));
        }

        return view('employees::staff.edit')->with('staff', $staff);
    }

    /**
     * Update the specified Staff in storage.
     *
     * @param  int              $id
     * @param UpdateStaffRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStaffRequest $request)
    {
        $staff = $this->staffRepository->findWithoutFail($id);

        if (empty($staff)) {
            Flash::error('Staff not found');

            return redirect(route('backend.staff.index'));
        }

        $staff = $this->staffRepository->update($request->all(), $id);

        Flash::success('Staff updated successfully.');

        return redirect(route('backend.staff.index'));
    }

    /**
     * Remove the specified Staff from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $staff = $this->staffRepository->findWithoutFail($id);

        if (empty($staff)) {
            Flash::error('Staff not found');

            return redirect(route('backend.staff.index'));
        }

        $this->staffRepository->delete($id);

        Flash::success('Staff deleted successfully.');

        return redirect(route('backend.staff.index'));
    }
}
