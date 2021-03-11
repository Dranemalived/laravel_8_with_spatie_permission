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

        $_view = [];
        $_create = [];
        $_edit = [];
        $_delete = [];

        foreach ($permissions as $permission) {
            $type = strstr($permission->name, '_', true);

            switch ($type):
                case "view":
                    array_push($_view, $permission);
                    break;
                case "create":
                    array_push($_create, $permission);
                    break;
                case "edit":
                    array_push($_edit, $permission);
                    break;
                case "delete":
                    array_push($_delete, $permission);
                    break;
            endswitch;
        }

        return view('permission.permission_create', compact('roles', '_view', '_create', '_edit', '_delete'));
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
