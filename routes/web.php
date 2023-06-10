<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\administradorController;
use App\Http\Controllers\estudiantesController;
use App\Http\Controllers\profesoresController;
use App\Http\Controllers\welcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',welcomeController::class)->name('volver');
Route::get('administrador/edit',[administradorController::class, 'edit']);
Route::get('administrador/index',[administradorController::class, 'index'])->name('administrador.tabla');
Route::get('administrador/propuestas',[administradorController::class, 'propuestas'])->name('administrador.propuestas');
Route::post('administrador/actualizar',[administradorController::class, 'actualizar'])->name('administrador.actualizar');

Route::get('/profesores', [profesoresController::class, 'index'])->name('profesores.index');
Route::get('/profesores/crear',[profesoresController::class, 'crear'])->name('profesores.crear');
Route::post('/profesores/añadir',[profesoresController::class,'añadir'])->name('profesores.añadir');
Route::get('/profesores/select',[profesoresController::class,'select'])->name('profesores.select');
Route::post('/profesores/mostrarForm',[profesoresController::class,'mostrarForm'])->name('profesores.mostrarForm');
Route::post('/profesores/mostrarProp',[profesoresController::class,'mostrarPropuestas'])->name('profesores.mostrarPropuestas');

Route::get('/estudiantes',[estudiantesController::class,'index'])->name('estudiantes.index');
Route::get('/estudiantes/crear',[estudiantesController::class,'crear'])->name('estudiantes.crear');
Route::post('/estudiantes/añadir',[estudiantesController::class,'añadir'])->name('estudiantes.añadir');
Route::get('/estudiantes/prop',[estudiantesController::class,'pagPropuesta'])->name('estudiantes.propuesta');
Route::get('/estudiantes/select',[estudiantesController::class,'select'])->name('estudiantes.select');
Route::post('/estudiantes/mostrarForm',[estudiantesController::class,'mostrarForm'])->name('estudiantes.mostrarForm');
Route::post('/estudiantes/guardarForm',[estudiantesController::class,'guardarForm'])->name('estudiantes.guardarForm');


Route::get('/propuesta',[profesoresController::class,'propuestas'])->name('profesores.propuestas');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
