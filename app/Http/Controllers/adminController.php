<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cursos;
use App\User;
use App\Models\Role;
use App\Models\RolesUsers;
use App\Models\permissions_roles;
use App\Models\Permission;
use Illuminate\Support\Facades\Auth;
use File;

class adminController extends Controller
{
     
    public function index()
    {
        //
    }

    public function roles_users(){
        $roles = Role::all();
        $roles_users = RolesUsers::all();
        $users = User::all();
        return view('admin.app_roles_users', compact('roles','roles_users','users'));
    }
    public function permissions_roles(){
        $roles = Role::all();
        $roles_users = RolesUsers::all();
        $permissions = Permission::all();
        return view('admin.app_permissions_roles', compact('roles','roles_users','permissions'));
    }

 
    public function salvar_permissions_roles(Request $request)
    {
        //
        $roles = new permissions_roles();
        $roles->permission_id = $request->permission_id;
        $roles->role_id = $request->role_id;

        $roles->save();

        return 'Operação Efetuada com sucesso';
    }

    public function salvar_roles_users(Request $request)
    {
        //
        $roles = new RolesUsers();
        $roles->user_id = $request->user_id;
        $roles->role_id = $request->role_id;

        $roles->save();

        return 'Operação Efetuada com sucesso';
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
