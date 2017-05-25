<?php

namespace Modules\Core\Http\Controllers;

use Modules\Auth\Http\Requests\RolesRequest;
//use Modules\Auth\Permissions\PermissionManager;
//use Modules\Auth\Repositories\RoleRepository;
use Yajra\Datatables\Services\DataTable;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Auth\Models\User;
use Modules\Auth\Models\Role;
//use App\Http\Controllers\Controller;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class RolesController extends AdminBaseController
{
    /**
     * @var RoleRepository
     * //PermissionManager $permissions
     * //RoleRepository $role
     */
    private $role;

    public function __construct()
    {
        parent::__construct();

        //$this->permissions = $permissions;
        //$this->role = $role;
    }


    /**
     * Display a listing of the resource.
     * @return Response
     * //Role $role, Department $department, Group_assign_department $group_assign_department
     */
    public function index()
    {
        /*$groups = $group->get();
        $departments = $department->lists('id');*/
/*
$role = Role::find($id);
$rolePermissions = Permission::join("permission_role", "permission_role.permission_id", "=", "permissions.id")
->where("permission_role.role_id", $id)
->get();
return view('roles.show', compact('role', 'rolePermissions'));
*/

        //$roles = Role::orderBy('id', 'DESC')->paginate(5);
        //compact('roles')
        return view('core::roles.index');
    }


    public function anyData()
    {
        //->with('addresses')
        $role = Role::select(['id', 'name'])->orderBy('id');
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



        return Datatables::of($role)
            ->addColumn('rolesnamelink', function ($role) {
                return '<a href="backend/roles/' . $role->id . '" ">' . $role->name . '</a>';
            })

            ->add_column('edit', '
                <a href="{{ route(\'backend.roles.edit\', $id) }}" class="btn btn-success" >Edit</a>')
            ->add_column('delete', '
                <form action="{{ route(\'backend.roles.destroy\', $id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" name="submit" value="Delete" class="btn btn-danger" onClick="return confirm(\'Are you sure?\')"">

            {{csrf_field()}}
            </form>')
            ->make(true);
    }



    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return false;
        $roles = Role::get();
        return view('roles.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(RolesRequest $request)
    {
        $data = $this->mergeRequestWithPermissions($request);


        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'display_name' => 'required',
            'description' => 'required',
            'permission' => 'required',
        ]);

        $role = new Role();
        $role->name = $request->input('name');
        $role->display_name = $request->input('display_name');
        $role->description = $request->input('description');
        $role->save();

        foreach ($request->input('permission') as $key => $value) {
            $role->attachPermission($value);
        }

        return redirect()->route('roles.index')
            ->with('success', trans('auth::messages.role created'));
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($id)
    {
        return false;
        $role = Role::find($id);
        $rolePermissions = Permission::join("permission_role", "permission_role.permission_id", "=", "permissions.id")
            ->where("permission_role.role_id", $id)
            ->get();

        return view('roles.show', compact('role', 'rolePermissions'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return false;
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->mergeRequestWithPermissions($request);

        $this->validate($request, [
            'display_name' => 'required',
            'description' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::find($id);
        $role->display_name = $request->input('display_name');
        $role->description = $request->input('description');
        $role->save();

        DB::table("permission_role")->where("permission_role.role_id", $id)
            ->delete();

        foreach ($request->input('permission') as $key => $value) {
            $role->attachPermission($value);
        }

        return redirect()->route('auth::backend.roles.index')
            ->with('success', trans('auth::messages.role updated'));
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
        DB::table("roles")->where('id', $id)->delete();
        return redirect()->route('roles.index')
            ->with('success', trans('auth::messages.role deleted'));
    }
}
