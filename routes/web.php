<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', TodosController::class . '@index')->name('todos'); // <==== redirecciono a "todos" como index

/* Route::get('/tareas', [TodosController::class, 'index'])->name('todos');
Route::post('/tareas', [TodosController::class, 'store'])->name('todos');
Route::get('/tareas/{id}', [TodosController::class, 'show'])->name('todos-edit');
Route::patch('/tareas/{id}', [TodosController::class, 'update'])->name('todos-update');
Route::delete('/tareas/{id}', [TodosController::class, 'destroy'])->name('todos-destroy'); */

/* CRUD de todos - ini */
Route::get('/todos', TodosController::class . '@index')->name('todos'); // lista de todos
Route::post('/todos', TodosController::class . '@store');
Route::delete('/todos/{id}', [TodosController::class , 'destroy'])->name('todos-destroy');
Route::get('/todos/{id}', [TodosController::class , 'show'])->name('todos-edit');
Route::patch('/todos/{id}', [TodosController::class , 'update'])->name('todos-update');
/* CRUD de todos - fin */

Route::resource('categories', CategoriesController::class); // CRUD de todo el modelo de categorías
