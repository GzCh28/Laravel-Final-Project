<?php

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastsController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewsController;
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
//Dashboard Route
Route::get('/', [DashboardController::class, 'index']);

Route::get( '/register', [AuthController::class, 'registerPage']);

Route::post('/welcome', [AuthController::class, 'welcomePage']);

Route::get('/table', [AuthController::class, 'tablePage']);

Route::get('/datatable', [AuthController::class, 'dataTablePage']);



Route::middleware(['auth'])->group(function () {
  //Cast Route (Group)
  # Create
  Route::get('/cast/create', [CastsController::class, 'createCast']);
  Route::post('/cast', [CastsController::class, 'postCreate']);
  # Update
  Route::get('/cast/recreate/{id}', [CastsController::class, 'recreateCast']);
  Route::put('/cast/update/{id}', [CastsController::class, 'updateCast']);
  # Delete
  Route::get('/cast/delete/{id}', [CastsController::class, 'deleteCast']);

  //Reviews Route
  Route::get('/review/create/{id}', [ReviewsController::class, 'create']);
  Route::post('/review/{id}', [ReviewsController::class, 'store']);
  Route::get('/review/delete/{id}/{review}', [ReviewsController::class, 'deleteCast']);
});



# Read
Route::get('/cast', [CastsController::class, 'getAllCasts']);
Route::get('/cast/{id}', [CastsController::class, 'getCastbyId']);



//Genre Route
Route::resource('genre', GenreController::class);

//Film Route
Route::resource('film', FilmController::class);

//Profile Route
Route::resource('profile', ProfileController::class);

//Auth Route
Auth::routes();

//Reviews Route
