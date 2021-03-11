<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        return view('admin.user.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = DB::table('roles')->get();

        return view('admin.user.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|unique:users,name,' . $id,
            'email' => 'required|email|unique:users,email,' . $id
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->assignRole($request->role_id);

        $user->save();

        return redirect('/user')->with('success', 'User updated');
    }
}
