<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\Participantes;
use App\Models\Provincia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //

    public function index(){



        return view('layouts.frontend');

    }





    // public function registroparticipante(Request $request){

   
    //     // return $request->all();
    //     $participante = new Participantes();

    //     $participante->nombres = $request->nombrecompleto;
    //     $participante->dni = $request->dni;
    //     $participante->edad = $request->edad;

    //     $participante->departamento = $request->departamento_name;
    //     $participante->provincia = $request->provincia_name;

    //     $participante->distrito = $request->distrito_name;
    //     $participante->direccion = $request->direccion;
    //     $participante->correo = $request->correo;
    //     $participante->celular = $request->celular;
    //     $participante->anolavadora = $request->anolavadora;
    //     $participante->modelo = $request->modelo;

        
    //     $foto = $request->file('foto')->store('public/participantes');
    //     $url_img = Storage::url($foto);

    //     $participante->foto = $url_img;

    //     $participante->save();


    //     return response()->json(['message'=>'Participante registrado', 'status'  =>  200]);

    // }







  

}
