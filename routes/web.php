<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\EntradaController;


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


    Route::resource('estoque', EstoqueController::class);

    Route::resource('entrada', EntradaController::class);


