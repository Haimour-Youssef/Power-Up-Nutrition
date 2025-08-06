<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecetteController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\InstructionController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/recette/{permalien?}',[HomeController::class, 'recetteDet'])->name('recetteDetail');
Route::get('/recettes', [HomeController::class, 'allRecettes'])->name('recettes');

Auth::routes();


Route::prefix('/admin')
->middleware('auth')
->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('admin');
        // Route::resource('ingredients', IngredientController::class);
        // Route::resource('instructions', InstructionController::class);
        Route::resource('recettes', RecetteController::class);
    });
