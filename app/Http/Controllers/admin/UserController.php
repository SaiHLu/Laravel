<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('backend.users.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->firstOrFail();
        $roles = Role::all();
        $selectedRoles = $user->roles()->pluck('name')->toArray();

        return view('backend.users.edit', compact('user', 'roles', 'selectedRoles'));
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->firstOrFail();

        $user->syncRoles($request->get('role'));//Get role from <select></select>

        return redirect(action('admin\UserController@edit', $id))->with('status', 'Successfully Updated!');
    }
}
