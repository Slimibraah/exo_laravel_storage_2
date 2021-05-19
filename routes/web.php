<?php

use App\Http\Controllers\caracteristiqueController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Database\Seeders\CaracteristiqueSeeder;
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

Route::get('/', function () {
    return view('welcome');
});

// User
// Route::get("/user",[UserController::class,"index"])->name("user");
// Route::get("/user/{id}/show",[UserController::class,"show"]);
// Route::get("/user/create",[UserController::class,"create"]);
// Route::post("/user/store",[UserController::class,"store"]);
// Route::post("/user/{id}/delete",[UserController::class,"destroy"]);
// Route::get("/user/{id}/edit",[UserController::class,"edit"]);
// Route::post("/user/{id}/update",[UserController::class,"update"]);
route::resources(("/user", UserController::class))
Route::post('/user/{id}/download', [UserController::class,'download']);

// // portfolio
// Route::get("/portfolio",[PortfolioController::class,"index"])->name("portfolio");
// Route::get("/portfolio/{id}/show",[PortfolioController::class,"show"]);
// Route::get("/portfolio/create",[PortfolioController::class,"create"]);
// Route::post("/portfolio/store",[PortfolioController::class,"store"]);
// Route::post("/portfolio/{id}/delete",[PortfolioController::class,"destroy"]);
// Route::get("/portfolio/{id}/edit",[PortfolioController::class,"edit"]);
// Route::post("/portfolio/{id}/update",[PortfolioController::class,"update"]);
// Route::post('/portfolio/{id}/download', [PortfolioController::class,'download']);

// // galerie
// Route::get("/galerie",[GalerieController::class,"index"])->name("galerie");
// Route::get("/galerie/{id}/show",[GalerieController::class,"show"]);
// Route::get("/galerie/create",[GalerieController::class,"create"]);
// Route::post("/galerie/store",[GalerieController::class,"store"]);
// Route::post("/galerie/{id}/delete",[GalerieController::class,"destroy"]);
// Route::get("/galerie/{id}/edit",[GalerieController::class,"edit"]);
// Route::post("/galerie/{id}/update",[GalerieController::class,"update"]);
// Route::post('/galerie/{id}/download', [GalerieController::class,'download']);

// // Carrac
// Route::get("/caracteristique",[caracteristiqueController::class,"index"])->name("caracteristique");
// Route::get("/caracteristique/{id}/show",[caracteristiqueController::class,"show"]);
// Route::get("/caracteristique/create",[caracteristiqueController::class,"create"]);
// Route::post("/caracteristique/store",[caracteristiqueController::class,"store"]);
// Route::post("/caracteristique/{id}/delete",[caracteristiqueController::class,"destroy"]);
// Route::get("/caracteristique/{id}/edit",[caracteristiqueController::class,"edit"]);
// Route::post("/caracteristique/{id}/update",[caracteristiqueController::class,"update"]);

// // portfolio
// Route::get("/service",[ServiceController::class,"index"])->name("service");
// Route::get("/service/{id}/show",[ServiceController::class,"show"]);
// Route::get("/service/create",[ServiceController::class,"create"]);
// Route::post("/service/store",[ServiceController::class,"store"]);
// Route::post("/service/{id}/delete",[ServiceController::class,"destroy"]);
// Route::get("/service/{id}/edit",[ServiceController::class,"edit"]);
// Route::post("/service/{id}/update",[ServiceController::class,"update"]);
// Route::post('/service/{id}/download', [ServiceController::class,'download']);
