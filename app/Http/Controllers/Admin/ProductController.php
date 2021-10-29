<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $products = Product::all();
        return view('admin.productos.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $colors = Color::all();
        return view('admin.productos.create', compact('categories','colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            // 'name' => 'required',
            // 'image' =>  'required'
        ]);

      
        $foto = $request->file('image')->store('public/products');
        $url_img = Storage::url($foto);
        
        $product = Product::create([

        'name' => $request->name,
        'image'  => $url_img,
        'slug' => Str::slug($request->name,'-'),
        'code'  => $request->code,
        'large'  => $request->large,
        'ancho'  => $request->ancho,
        'alto'  => $request->alto,
        'diametro'  => $request->diametro,
        'capacidad'  => $request->capacidad,
        'user_id' => Auth::user()->id,
        'category_id' => $request->category,
        
        ]);
        
        $product->save();
   
        $product->colors()->attach($request->color);
        
     

        // return dd($request->colors);

        

        return redirect()->route('admin.products.index')->with('info', 'Producto agregado correctamente');
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
    public function destroy(Product $product)
    {
      $product->delete();
      return redirect()->back()->with('info', 'El producto fue eliminado con éxito');
    }
}
