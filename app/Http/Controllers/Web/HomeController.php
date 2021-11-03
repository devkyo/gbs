<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //

    public function index(){

        $images = Slider::all();

        // return dd($sliders);

        return view('welcome', compact('images'));

    }

    public function productos(){
        $productos = Product::all();
        return view('frontend.productos', compact('productos'));
    }
    public function nosotros(){
        return view('frontend.nosotros');
    }
    public function contacto(){
        return view('frontend.contacto');
    }
    public function servicios(){
        return view('frontend.servicios');
    }
    public function blog(){
        return view('frontend.blog');
    }


    public function coleccion(){
        return view('frontend.category');
    }

    public function item(){
        return view('frontend.item');
    }

    public function post(){
        return view('frontend.post');
    }

 

}
