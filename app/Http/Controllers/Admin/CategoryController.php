<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $categories = Category::all();
        return view('admin.categorias.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorias.create');
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
            'image' =>  'required'
        ]);

      
        $foto = $request->file('image')->store('public/category');
        $url_img = Storage::url($foto);
        
        $category = new Category();
        $category->name = $request->name;
        $category->image  = $url_img;
        $category->slug = Str::slug($request->name,'-');
        $category->user_id = Auth::user()->id;
        $category->save();


        // return dd($request->all());

        

        return redirect()->route('admin.categories.index')->with('info', 'Categoria agregada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        return ('hola');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categorias.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
          'name'  =>  'required',
        ], [
            'name.required' => 'Ingrese un nombre a la categoria'
        ]);
        
        
        if($request->file('image')){

          $foto = $request->file('image')->store('public/category');
          $url_img = Storage::url($foto);
          $category->image  = $url_img;
        }

        $category->name = $request->name;
        $category->slug = Str::slug($request->name,'-');
        $category->user_id = Auth::user()->id;
        $category->save();

      

        return redirect()->route('admin.categories.index')->with('info', 'Imagen actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
      $category->delete();
      return redirect()->back()->with('info', 'La categoria fue eliminada con éxito');
    }
}
