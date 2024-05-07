<?php

namespace App\Http\Controllers\Admin\ECommerce;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ECommerce\ProductRequest;
use App\Models\Ecommerce\Category;
use App\Models\Ecommerce\Image;
use App\Models\Ecommerce\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.e_commerce.products.index', compact('products'));
    }

    public function create(Product $product)
    {
        $category = Category::all();
        return view('admin.e_commerce.products.create', compact('product', 'category'));
    }

    public function store(ProductRequest $request)
    {
        $product = new Product($request->validated());
        $product->user_id = auth()->user()->id;
    
        // Guardar el producto y obtener su ID
        $product->save();
        $productId = $product->id;
    
        $userId = auth()->id();
    
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $imagePath = $file->store('public/products');
    
                // Crear una nueva entrada en la tabla de imágenes
                $image = new Image([
                    'url' => $imagePath,
                    'user_id' => $userId,
                ]);
    
                // Asociar la imagen con el producto utilizando el ID del producto
                $image->imageable_id = $productId;
                $image->imageable_type = Product::class;
                $image->save();
            }
        }
    
       /*  return back()->with('info', 'Producto creado exitosamente.');   */
         return redirect()->route('admin.e_commerce.products.index')->with('info', 'Producto creado exitosamente.'); 
    }
    

    public function show(Product $product)
    {
        $category = Category::all();
        return view('admin.e_commerce.products.show', compact('product', 'category'));
    }
    
    public function edit(Product $product)
    {

        $image = $product->images;
        $category = Category::all();
        return view('admin.e_commerce.products.edit', compact('image', 'category'));
    }


    public function update(ProductRequest $request, Product $product)
    {
        $this->authorize('author', $product);
    
        // Actualizar los campos del producto
        $product->update($request->validated());
    
        $userId = auth()->id();
    
        // Eliminar imágenes antiguas asociadas al producto
        foreach ($product->images as $image) {
            Storage::delete($image->url);
            $image->delete();
        }
    
        // Guardar las nuevas imágenes
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $url = $file->store('public/products');
    
                // Crear una nueva entrada en la tabla de imágenes
                $product->images()->create([
                    'url' => $url,
                    'user_id' => $userId,
                ]);
            }
        }
        return back()->with('info', 'Producto actualizado exitosamente.');  
       
    }
    

    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('info', 'Producto eliminado exitosamente.');  
       
  /*       return redirect()->route('admin.e_commerce.products.index')->with('info', 'Producto eliminado exitosamente.');
    */ }
}
