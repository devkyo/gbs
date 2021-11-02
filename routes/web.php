<?php

use App\Http\Controllers\Web\HomeController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',  [HomeController::class, 'index']);
Route::get('/productos',  [HomeController::class, 'productos']);
Route::get('/nosotros',  [HomeController::class, 'nosotros']);
Route::get('/blog',  [HomeController::class, 'blog']);
Route::get('/contacto',  [HomeController::class, 'contacto']);
Route::get('/servicios',  [HomeController::class, 'contacto']);
Route::get('/coleccion',  [HomeController::class, 'coleccion']);

Route::get('/producto',  [HomeController::class, 'item']);


Route::get('/post',  [HomeController::class, 'post']);

// Route::get('/producto/{slug}',  [HomeController::class, 'search']);
// Route::get('/',  [HomeController::class, 'index']);



// Route::get('/register', function() {
//     return redirect('/login');
// });




// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

