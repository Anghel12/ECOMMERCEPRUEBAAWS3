<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ECommerce\AddressRequest;
use App\Models\Ecommerce\Address;
use Illuminate\Http\Request;

class AdressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
         $addresses = Address::all();
        return view('admin.user.address.index', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddressRequest $request)
    {
        // Crear una nueva instancia de Address con los datos validados
    $address = new Address($request->validated());

    // Asignar el user_id del usuario autenticado
    $address->user_id = auth()->user()->id;
    
    // Guardar la dirección
    $address->save();

    // Redirigir a donde desees después de guardar
  /*   return redirect()->route('admin.user.address.index')->with('info', ''); */
    return back()->with('info', 'Dirección creada exitosamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {

        return view('admin.user.address.show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        return view('admin.user.address.edit', compact('address'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AddressRequest $request, Address $address)
    {
        // Validar los datos del formulario
        $validatedData = $request->validated();
    
        // Actualizar los campos de la dirección
        $address->update($validatedData);
    
        // Redirigir a donde desees después de actualizar
        return back()->with('info', 'Dirección actualizada exitosamente.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        // Verificar si el usuario tiene permiso para eliminar la dirección
       /*  $this->authorize('delete', $address);
     */
        // Eliminar la dirección de la base de datos
        $address->delete();
    
        // Redirigir a donde desees después de eliminar
        return back()->with('info', 'Dirección eliminada exitosamente.');
/*         return redirect()->route('admin.user.address.index')->with('info', ''); */
    }
    
}
