<?php

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

Route::group(['middleware' => 'web'],function(){

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->middleware('auth');
Route::get('/usuarios/new', [App\Http\Controllers\UsuariosController::class, 'new'])->middleware('auth');
Route::post('/usuarios/add', [App\Http\Controllers\UsuariosController::class, 'add'])->middleware('auth');
Route::get('/usuarios/{id}', [App\Http\Controllers\UsuariosController::class, 'show'])->middleware('auth');
Route::get('/usuarios/{id}/edit', [App\Http\Controllers\UsuariosController::class, 'edit'])->middleware('auth');
Route::post('/usuarios/update/{id}', [App\Http\Controllers\UsuariosController::class, 'update'])->middleware('auth');
Route::delete('/usuarios/delete/{id}', [App\Http\Controllers\UsuariosController::class, 'delete'])->middleware('auth');

//area dos Professores
Route::get('/professores', [App\Http\Controllers\ProfessorController::class, 'index'])->middleware('auth');
Route::post('/professores/add', [App\Http\Controllers\ProfessorController::class, 'add'])->middleware('auth');
Route::get('/professores/new', [App\Http\Controllers\ProfessorController::class, 'new'])->middleware('auth');
Route::get('/professores/{id}', [App\Http\Controllers\ProfessorController::class, 'show'])->middleware('auth');
Route::get('/professores/{id}/edit', [App\Http\Controllers\ProfessorController::class, 'edit'])->middleware('auth');
Route::post('/professores/update/{id}', [App\Http\Controllers\ProfessorController::class, 'update'])->middleware('auth');
Route::delete('/professores/delete/{id}', [App\Http\Controllers\ProfessorController::class, 'delete'])->middleware('auth');


//area das Modalidades
Route::get('/modalidades', [App\Http\Controllers\ModalidadeController::class, 'index'])->middleware('auth');
Route::get('/modalidades/new', [App\Http\Controllers\ModalidadeController::class, 'new'])->middleware('auth');
Route::post('/modalidades/add', [App\Http\Controllers\ModalidadeController::class, 'add'])->middleware('auth');
Route::get('/modalidades/{id}', [App\Http\Controllers\ModalidadeController::class, 'show'])->middleware('auth');
Route::get('/modalidades/{id}/edit', [App\Http\Controllers\ModalidadeController::class, 'edit'])->middleware('auth');
Route::post('/modalidades/update/{id}', [App\Http\Controllers\ModalidadeController::class, 'update'])->middleware('auth');
Route::delete('/modalidades/delete/{id}', [App\Http\Controllers\ModalidadeController::class, 'delete'])->middleware('auth');

