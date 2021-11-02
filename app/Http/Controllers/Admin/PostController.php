<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $posts = Post::all();
        return view('admin.blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
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
            'title' => 'required',
            'image' =>  'required',
            'name'  =>  'required'
        ],[
            'title.required'    =>  'Ingrese un titulo a su noticia.',
            'image.required'    =>  'La noticia requiere una imagen destacada.',
            'name.required'     =>  'La noticia require contenido'
        ]);

        $foto = $request->file('image')->store('public/post');
        $url_img = Storage::url($foto);

        
        $post = new Post();

        $post = Post::create([
            'title' =>  $request->title,
            'image' =>  $url_img,
            'slug'  =>  Str::slug($request->title,'-'),
            'name'  => $request->name,
            'user_id'   =>  Auth::user()->id
        ]);
        
        $post->slug = $post->slug.'-'.$post->id;


        $post->save();

        

        return redirect()->route('admin.blog.index')->with('info', 'Noticia agregada correctamente');
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
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'image' => 'required',
            

        ], [
            'image.required' => 'Seleciona la nueva imagen'
        ]);

        $foto = $request->file('image')->store('public/slider');
        $url_img = Storage::url($foto);

        $slider->image = $url_img;

        $slider->save();

        

        return redirect()->route('admin.sliders.index')->with('info', 'Imagen actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->back()->with('info', 'Slider fue eliminado con éxito');
    }
}
