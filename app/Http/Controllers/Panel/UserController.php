<?php

namespace App\Http\Controllers\Panel;

use App\Model\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends PanelController
{

    public function index()
    {
//        $roles = auth()->user()->role()->get();
//        $roles = auth()->user()->hasRole('Super_admin');
        $users = User::with('role')->paginate(20);

        return view('Panel.User.UserList', compact('users', 'roles'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('Panel.User.AddUser', compact('roles'));
    }

    public function store(Request $request)
    {
        $file = $request->file('image');
        $path = 'UserImage';
        $img = $this->uploader($file, $path);
        $password = Hash::make($request->input('password'));
        $username = Str::random(10);
        $user = User::create([
            'name' => $request->input('name'),
            'last_name' => $request->input('last_name'),
            'avatar' => $img,
            'email' => $request->input('email'),
            'password' => $password,
            'username' => $username,
            'mobile' => $request->input('mobile'),
            'status' => 'فعال',
        ]);
        $user->role()->sync($request->input('role_id'));

        return redirect(route('user.index'));
    }

    public function show(User $user)
    {
        $user['role'] = $user->role()->get();
        return $user;
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        $user['role'] = $user->role()->get();
        return view('Panel.User.EditUser', compact('roles', 'user'));
    }

    public function update(Request $request, User $user)
    {
        if ($request->hasFile('image')) {
            File::delete(public_path($user->avatar));
            $file = $request->input('image');
            $path = 'UserImage';
            $img = $this->uploader($file, $path);
            $user->update(['avatar' => $img]);
        }
        $password = Hash::make($request->input('password'));
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $password,
            'last_name' => $request->input('last_name'),
            'mobile' => $request->input('mobile'),
            'status' => $request->input('status'),
        ]);
        $user->role()->sync($request->input('role_id'));

        return redirect(route('user.index'));
    }

    public function destroy(User $user)
    {
        $user->role()->detach('role_id');
        File::delete(public_path($user->avatar));
        $user->delete();
        return redirect(route('user.index'));
    }
}
