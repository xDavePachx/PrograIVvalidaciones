<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

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
Route::get('/estudiante/{id}/{codigo}/{nombre}/{apellido}/{telefono}', function ($id=0, $codigo='', $nombre='', $apellido='', $telefono='') {
    return ('ID estudiante: '.$id. '; codigo: '. $codigo. '; nombre: '. $nombre. '; apellido: '. $apellido. '; telefono: '. $telefono);
})->where('id', '[0-9]+');

Route::resource('estudiante',EstudianteController::class);
//
//
//
Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
