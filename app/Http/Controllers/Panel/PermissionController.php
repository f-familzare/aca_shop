<?php

namespace App\Http\Controllers\Panel;

use App\Model\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends PanelController
{

    public function index()
    {
        $permissions=Permission::paginate(20);
        return view('Panel.Permission.PermissionList',compact('permissions'));
    }

    public function create()
    {
        return view('Panel.Permission.AddPermission');
    }

    public function store(Request $request)
    {
        Permission::create([
            'permission_title'=>$request->input('permission_title'),
            'permission_label'=>$request->input('permission_label'),
        ]);
        return redirect(route('permission.index'));
    }

    public function show(Permission $permission)
    {
        return $permission;
    }

    public function edit(Permission $permission)
    {
        return view('Panel.Permission.EditPermission',compact('permission'));
    }

    public function update(Request $request, Permission $permission)
    {
        $permission->update([
            'permission_title'=>$request->input('permission_title'),
            'permission_label'=>$request->input('permission_label'),
        ]);
        return redirect(route('permission.index'));
    }
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect(route('permission.index'));
    }
}
