<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    EventoController,
    MaterialController,
    TipoEventoController
};

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


Route::get('events/search-by-name', [EventoController::class,'searchByName'])->name('events.search-by-name');
Route::get('materials/search-by-name', [MaterialController::class,'searchByName'])->name('materials.search-by-name');
Route::get('type-events/search-by-name', [TipoEventoController::class,'searchByName'])->name('type-events.search-by-name');
