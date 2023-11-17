<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users =  User::all();
        return view('backend.user.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = UserRole::all();
        return view('backend.user.add_user', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        if ($request->photo) {
            $image = $request->photo;
            $image_name = hexdec(uniqid(5));
            $filename = $image->getClientOriginalExtension();
            $image_full_name = $image_name . '.' . $filename;
            $upload_path = 'public/images/users/';
            $image_url = $image_full_name;
            $image->move($upload_path, $image_full_name);
            $user->photo = $image_url;
        }
        $user->role = $request->user_role;
        $user->address = $request->email;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect()->back();
    }

    public function userRoleList()
    {
        $roles = UserRole::all();
        return view('backend.user.users_role', compact('roles'));
    }

    public function roleDestroy(string $id)
    {
        UserRole::destroy($id);
        return redirect()->back();
    }

    public function userRoleCreate()
    {
        return view('backend.user.create_role');
    }
    public function userRoleStore(Request $request)
    {
        $role = new UserRole();
        $role->role_name = $request->role_name;
        $role->role_slug = $request->role_slug;
        $role->save();

        return redirect()->route('users.roles')->with('success', 'New Role Added Success');
    }
}
