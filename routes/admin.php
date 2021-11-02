<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('admin.index');
// Route::middleware('web')->get('/', [HomeController::class, 'index']);


// downloads links 
// Route::middleware('web')->get('/download/empresas', [HomeController::class, 'empresasExport']);


Route::middleware('web')->resource('sliders', SliderController::class)->names('admin.sliders');

Route::middleware('web')->resource('categories', CategoryController::class)->names('admin.categories');
Route::middleware('web')->resource('products', ProductController::class)->names('admin.products');
Route::middleware('web')->resource('colors', ColorController::class)->names('admin.colors');

Route::middleware('web')->resource('blog', PostController::class)->names('admin.blog');

// Route::middleware('web')->resource('sliders', SliderController::class)->names('admin.sliders');
// Route::middleware('web')->resource('convocatorias', ConvocatoriaController::class)->names('admin.convocatorias');
// Route::middleware('web')->resource('empresas', EmpresaController::class)->names('admin.empresas');
// Route::middleware('web')->get('revision/{empresa}', [EmpresaController::class, 'revision'])->name('admin.empresas.revision');