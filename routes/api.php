<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/registroparticipante', [HomeController::class, 'registroparticipante'])->name('registropartcipante');



Route::get('/departamentos', [HomeController::class, 'home'])->name('departamentos');

Route::get('/provincias/{departamento_id}', [HomeController::class, 'provincias'])->name('provincias');

Route::get('/distritos/{provincia_id}', [HomeController::class, 'distritos'])->name('distrito');


