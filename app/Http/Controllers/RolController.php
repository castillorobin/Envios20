<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//models de Spatie
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RolController extends Controller
{
    /*
    
    function __construct(){
        $this->middleware('permission: recursos | financiera |crear | ver | editar', ['only'=>['index']]);
    }
    
    
     Display a listing of the resource.
     */

    public function index()

    {
        $permission = Permission::get();
        $roles = Role::all();
        return view('usuarios.rolelist', compact('roles', 'permission'));
    }

    public function roleview(string $id)

    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();

        return view('usuarios.roleview', compact('role','permission','rolePermissions'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permission = Permission::get();
        $roles = Role::all();
        return view('usuarios.rolelist', compact('roles', 'permission'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'permission' => 'required']);
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));

        return redirect()->route('usuarios.rolelist');
    }

    public function guardarol(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'permission' => 'required']);
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));

        return redirect()->route('indexrol');
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
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();
    
        return view('roles.editar',compact('role','permission','rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);
    
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();
    
        $role->syncPermissions($request->input('permission'));
    
        return redirect()->route('usuarios.roleview');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table("roles")->where('id',$id)->delete();
        return redirect()->route('usuarios.roleview');       
    }
}
