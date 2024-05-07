<?php

namespace App\Http\Controllers\Admin\ECommerce;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ECommerce\CategoryRequest;
use App\Models\Ecommerce\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        return view('admin.e_commerce.categories.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.e_commerce.categories.create');
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        // Crear la categoría
        $category = Category::create($request->validated());
    
        // Obtener el ID del usuario autenticado
        $userId = auth()->id();
    
        // Verificar si se cargó una imagen
        if ($request->hasFile('file')) {
            // Guardar la imagen en el almacenamiento
            $imagePath = $request->file('file')->store('public/category');
    
            // Crear una nueva entrada en la tabla de imágenes asociada a la categoría
            $category->images()->create([
                'url' => $imagePath,
                'user_id' => $userId,
            ]);
        }
    
        // Redireccionar con un mensaje de éxito
        return redirect()->route('admin.e_commerce.categories.index')
                         ->with('info', 'Category created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('admin.e_commerce.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.e_commerce.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        // Actualizar la categoría con los datos validados
        $category->update($request->validated());
    
        // Obtener el ID del usuario autenticado
        $userId = auth()->id();
    
        // Verificar si se cargó una nueva imagen
        if ($request->hasFile('file')) {
            // Guardar la nueva imagen en el almacenamiento
            $newImagePath = $request->file('file')->store('public/category');
    
            // Eliminar la imagen anterior si existe y actualizar con la nueva imagen
            if ($category->images) {
                foreach ($category->images as $image) {
                    Storage::delete($image->url);
                    $image->update([
                        'url' => $newImagePath,
                        'user_id' => $userId,
                    ]);
                }
            } else {
                // Si no hay imagen asociada, crear una nueva entrada en la tabla de imágenes
                $category->images()->create([
                    'url' => $newImagePath,
                    'user_id' => $userId,
                ]);
            }
        }
    
        // Redireccionar con un mensaje de éxito
        return redirect()->route('admin.e_commerce.categories.index')
                         ->with('info', 'Category updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.e_commerce.categories.index')
                         ->with('info', 'Category deleted successfully');
    }

}
