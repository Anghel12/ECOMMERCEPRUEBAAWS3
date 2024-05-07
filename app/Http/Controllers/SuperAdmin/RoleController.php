<?php

namespace App\Http\Controllers\SuperAdmin;


use App\Http\Controllers\Controller;
use App\Models\Ecommerce\Product;
use App\Models\User;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /*  public function __construct()
     {
         $this->middleware('can:admin.roles.index')->only('index');
         $this->middleware('can:admin.roles.create')->only('create', 'store');
         $this->middleware('can:admin.roles.edit')->only('edit', 'update');
         $this->middleware('can:admin.roles.destroy')->only('destroy'); 
     }  */
 
    public function index()
    {

        $roles = Role::all();
        return view('super_admin.roles.index', compact('roles'));
   
    }

    public function create()
    {
        $permissions = Permission::all();

        return view('super_admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $role = Role::create($request->all());

        $role->permissions()->sync($request->permissions);

        return redirect()->route('super_admin.roles.edit', $role)->with('info', 'El rol se creo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();

        return view('super_admin.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    { 
        $request->validate([
            'name' => 'required'
        ]);
        $role->update($request->all());

        $role->permissions()->sync($request->permissions);

        return redirect()->route('super_admin.roles.edit', $role)->with('info', 'El rol se Actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('super_admin.roles.index')->with('info', 'El rol se creo con exito');
    }
}
