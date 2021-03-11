<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class PermissionController extends Controller
{
    public function index()
    {
        $roles = Role::all()->pluck('name');

        return view('permission.permission', compact('roles'));
    }

    public function create()
    {
        $roles = Role::all();
        $permissions = Permission::all();

        return view('permission.permission_create', compact('roles', 'permissions'));
    }

    public function store(Request $request)
    {
        $role_id = $request->role_id;
        $permissions = $request->permission;

        $role = Role::find($role_id);
        $role->syncPermissions($permissions);

        return redirect('/permission')->with('success', 'Permission mapped successfully');
    }
}
