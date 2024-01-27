<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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

// Trasa do utworzenia nowego rekordu
Route::post('/people', [PeopleController::class, 'create']);

// Trasa do pobrania wszystkich rekordów
Route::get('/people', [PeopleController::class, 'getAll']);

// Trasa do pobrania konkretnego rekordu
Route::get('/people/{id}', [PeopleController::class, 'read']);

// Trasa do aktualizacji konkretnego rekordu
Route::put('/people/{id}', [PeopleController::class, 'update']);

// Trasa do usunięcia konkretnego rekordu
Route::delete('/people/{id}', [PeopleController::class, 'delete']);
