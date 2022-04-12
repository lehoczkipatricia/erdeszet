<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForestryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/forestry", [ ForestryController::class, "listForestry"]);
Route::get("/species", [ ForestryController::class, "listTreeSpecie"]);
Route::get("/forestries", [ ForestryController::class, "listForestries"]);
