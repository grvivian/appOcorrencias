<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OcorrenciaController;

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
    return view('welcome');
});

Route::get('/ocorrencias', 
  [OcorrenciaController::class, 'index'])->name('ocorrencias.index');

Route::post('/ocorrencias', 
  [OcorrenciaController::class, 'store'])->name('ocorrencias.store');
