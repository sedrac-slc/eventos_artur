<?php

use App\Http\Controllers\{
    UserController,
    EventoController,
    ProfileController,
    AluguerController,
    MaterialController,
    TipoEventoController,
    MaterialTipoEventoController
};
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

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('users', UserController::class);
    Route::resource('events', EventoController::class);
    Route::resource('aluguers', AluguerController::class);
    Route::resource('materials', MaterialController::class);
    Route::resource('type-events', TipoEventoController::class);
    Route::resource('material-type-events', MaterialTipoEventoController::class);
});

require __DIR__.'/auth.php';
