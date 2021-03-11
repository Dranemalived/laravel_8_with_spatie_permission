<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    //

    public function index()
    {
        $roles = Role::all();

        return view('permission.role', ['roles' => $roles]);
    }

    public function create()
    {
        $user = Auth::user()->id;
        // Adding permissions to a user
        // $user->givePermissionTo('edit articles');
        return view('permission.role_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:roles|max:150'
        ]);

        Role::create(['name' => $request->name]);

        return redirect('/role')->with('success', 'Role created successfully');
    }

    public function edit($id)
    {
        $role = Role::find($id);

        return view('permission.role_edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|unique:roles,name,' . $id
        ]);

        $role = Role::find($id);
        $role->name = $request->name;
        $role->save();

        return redirect('/role')->with('success', 'Role updated successfully');
    }
}
