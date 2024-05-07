<?php

namespace App\Http\Controllers\Admin\ECommerce;

use App\Http\Controllers\Controller;
use App\Models\Ecommerce\Category;
use App\Models\Ecommerce\SubCategory;
use Illuminate\Http\Request;

class subCategoryController extends Controller
{
    public function index()
    {
       
        return view('admin.sub_categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('admin.sub_categories.create', compact('categories'));
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
            'name' => 'max:40',
            'slug' => 'max:40',
            'extratc' => 'max:40'
        ]);

        $category = subCategory::create($request->all());

        return redirect()->route('admin.sub_categories.index', $category)->with('info', 'subCategory CREADA CON EXITO.');


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
    public function edit(SubCategory $sub_category)
    {
        $categories = Category::pluck('name', 'id');
        return view('admin.sub_categories.edit', compact('sub_category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subCategory $sub_category)
    {
        $request->validate([
            'name' => 'max:40',
            'slug' => 'max:40',
            'extratc' => 'max:40'
        ]);

        $sub_category = subCategory::create($request->all());

        return redirect()->route('admin.sub_categories.index', $sub_category)->with('info', 'sub_category EDITADA CON EXITO.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
