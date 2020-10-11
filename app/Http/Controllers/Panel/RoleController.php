<?php

namespace App\Http\Controllers\Panel;

use App\Model\Permission;
use App\Model\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends PanelController
{

    public function index()
    {
        $roles=Role::paginate(20);
        return view('Panel.Role.RoleList',compact('roles'));
    }

    public function create()
    {
        $permissions=Permission::all();
        return view('Panel.Role.AddRole',compact('permissions'));
    }

    public function store(Request $request)
    {
        $role=Role::create([
            'title'=>$request->input('title'),
            'about'=>$request->input('about')
        ]);
        $role->permission()->sync($request->input('permission_id'));
        return redirect(route('role.index'));
    }

    public function show(Role $role)
    {
        return $role;
    }

    public function edit(Role $role)
    {
        $permissions=Permission::all();
        return view('Panel.Role.EditRole',compact('role','permissions'));
    }


    public function update(Request $request, Role $role)
    {
         $role->update([
                    'title'=>$request->input('title'),
                    'about'=>$request->input('about')
                ]);
        $role->permission()->sync($request->input('permission_id'));
        return redirect(route('role.index'));
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect(route('role.index'));
    }
}
