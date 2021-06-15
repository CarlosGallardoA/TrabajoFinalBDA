<?php

use App\Http\Controllers\EncuentroController;
use App\Http\Controllers\JugadoreController;
use App\Http\Controllers\PosicioneController;
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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('encuentros', EncuentroController::class)->names('admin.encuentros');
Route::resource('jugadores', JugadoreController::class)->names('admin.jugadores');
Route::resource('posiciones', PosicioneController::class)->names('admin.posiciones');