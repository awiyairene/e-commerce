<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get("categorie",[CategorieController::class,"index"])->name("categorie.index");

Route::get("categorie/create",[CategorieController::class,"create"])->name("categorie.create");
Route::post("categorie/store",[CategorieController::class,"store"])->name("categorie.store");
