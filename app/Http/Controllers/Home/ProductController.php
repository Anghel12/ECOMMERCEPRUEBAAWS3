<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Ecommerce\Category;
use App\Models\Ecommerce\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $products = Product::all();

        $category = Category::all();

        return view('home.e_commerce.products.index', compact('products', 'category'));
        
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {

        
        $similares = Product::where('category_id', $product->category_id)
                            ->where('status', 2)
                            ->where('id', '!=', $product->id)
                            ->take(4)
                            ->latest('id')
                            ->get();

       /*  $comment = Comment::where('commentable_id', $post->id)->latest('id')->get(); */

        return view('home.e_commerce.products.show', compact('product', 'similares'));
      
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
        //
    }
}
