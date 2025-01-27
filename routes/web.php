<?php

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastsController;
use App\Http\Controllers\GenreController;

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

Route::get('/', [DashboardController::class, 'index']);

Route::get( '/register', [AuthController::class, 'registerPage']);

Route::post('/welcome', [AuthController::class, 'welcomePage']);

Route::get('/table', [AuthController::class, 'tablePage']);

Route::get('/datatable', [AuthController::class, 'dataTablePage']);


# Create
Route::get('/cast/create', [CastsController::class, 'createCast']);
Route::post('/cast', [CastsController::class, 'postCreate']);

# Read
Route::get('/cast', [CastsController::class, 'getAllCasts']);
Route::get('/cast/{id}', [CastsController::class, 'getCastbyId']);

# Update
Route::get('/cast/recreate/{id}', [CastsController::class, 'recreateCast']);
Route::put('/cast/update/{id}', [CastsController::class, 'updateCast']);

# Delete
Route::get('/cast/delete/{id}', [CastsController::class, 'deleteCast']);

//Genre Route
Route::resource('genre', GenreController::class);

//Film Route
Route::resource('film', FilmController::class);