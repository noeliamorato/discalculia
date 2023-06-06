<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuegosController;
use App\Http\Controllers\TemasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\RetroalimentacionesController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::get('registeruser', [UserController::class, 'Userregister']);
Route::get('usuarios', [UserController::class, 'index']);

Route::group(['middleware' => ["auth:sanctum"]], function () {
    Route::get('users-profile', [UserController::class, 'userProfile']);
    Route::get('logout', [UserController::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//tabla juego
Route::get('/juego', [JuegosController::class, 'index']);
Route::post('/juego', [JuegosController::class, 'store']);
Route::put('/juego/{id}', [JuegosController::class, 'update']);
Route::delete('/juego/{id}', [JuegosController::class, 'destroy']);

//tabla tema
Route::get('/tema', [TemasController::class, 'index']);
Route::post('/tema', [TemasController::class, 'store']);
Route::put('/tema/{id}', [TemasController::class, 'update']);
Route::delete('/tema/{id}', [TemasController::class, 'destroy']);

//tabla categoria
Route::get('/categoria', [CategoriasController::class, 'index']);
Route::post('/categoria', [CategoriasController::class, 'store']);
Route::put('/categoria/{id}', [CategoriasController::class, 'update']);
Route::delete('/categoria/{id}', [CategoriasController::class, 'destroy']);

//tabla retroalimentacion
Route::get('/retro', [RetroalimentacionesController::class, 'index']);
Route::post('/retro', [RetroalimentacionesController::class, 'store']);
Route::put('/retro/{id}', [RetroalimentacionesController::class, 'update']);
Route::delete('/retro/{id}', [RetroalimentacionesController::class, 'destroy']);
