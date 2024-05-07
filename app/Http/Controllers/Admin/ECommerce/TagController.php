<?php

namespace App\Http\Controllers\Admin\ECommerce;

use App\Http\Controllers\Controller;
use App\Models\Ecommerce\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
   /*  public function __construct()
    {
        $this->middleware('can:admin.tags.index')->only('index');
        $this->middleware('can:admin.tags.create')->only('create', 'store');
        $this->middleware('can:admin.tags.edit')->only('edit', 'update');
        $this->middleware('can:admin.tags.destroy')->only('destroy');
    } */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('admin.e_commerce.tags.index', compact('tags') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors =[
            'red' =>'color rojo',
            'blue' =>'color azul',
            'green' =>'color verde'

         ];
        return view('admin.e_commerce.tags.create', compact('colors'));
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
            'name' => 'required',
            'slug' => 'required|unique:tags',
            'color' => 'required'
        ]);

        $tag = Tag::create($request->all());

        return redirect()->route('admin.e_commerce.tags.edit', compact('tag'))->with('info', 'TAG CREADO CON EXITO.');
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
    public function edit(Tag $tag)
    {
        $colors =[
            'red' =>'color rojo',
            'blue' =>'color azul',
            'green' =>'color verde'

         ];
        return view('admin.e_commerce.tags.edit', compact('tag', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:tags,slug,$tag->id",
            'color' => 'required'
        ]);

        $tag->update($request->all());

        return redirect()->route('admin.e_commerce.tags.edit', compact('tag'))->with('info', 'TAG ACTUALIZADO CON EXITO.');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.e_commerce.tags.index')->with('info', 'TAG ELIMINADO.');
    }
}
