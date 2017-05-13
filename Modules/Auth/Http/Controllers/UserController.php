<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Auth\Models\User;
use Modules\Auth\Models\Role;
use Illuminate\Routing\Controller;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = auth::orderBy('id', 'DESC')->paginate(5);
        return view('auth::backend.users.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::lists('display_name', 'id');
        return view('auth::backend.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = auth::create($input);
        foreach ($request->input('roles') as $key => $value) {
            $user->attachRole($value);
        }

        return redirect()->route('auth::backend.users.index')
            ->with('success', trans('auth::messages.user created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = auth::find($id);
        return view('auth::backend.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = auth::find($id);
        $roles = Role::lists('display_name', 'id');
        $userRole = $user->roles->lists('id', 'id')->toArray();

        return view('auth::backend.users.edit', compact('user', 'roles', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = array_except($input, array('password'));
        }

        $user = auth::find($id);
        $user->update($input);
        DB::table('role_user')->where('user_id', $id)->delete();


        foreach ($request->input('roles') as $key => $value) {
            $user->attachRole($value);
        }

        return redirect()->route('users.index')
            ->with('success', trans('auth::messages.user updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        auth::find($id)->delete();
        return redirect()->route('auth::backend.users.index')
            ->with('success', trans('auth::messages.user deleted'));
    }


    public function sendResetPassword($user)
    {

        /*
                $user = $this->user->find($user);
                $code = $auth->createReminderCode($user);

                event(new UserHasBegunResetProcess($user, $code));

                return redirect()->route('admin.user.user.edit', $user->id)
                    ->withSuccess(trans('auth::auth.reset password email was sent'));
        */

    }
}
