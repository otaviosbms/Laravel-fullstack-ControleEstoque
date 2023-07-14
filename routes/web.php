<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\SaidaController;
use App\Http\Controllers\SaldoController;

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

    // Estoque:
    Route::resource('estoque', EstoqueController::class);

    // Entradas:
    Route::get('entrada', [EntradaController::class,'index'])->name('entrada.index');
    Route::post('entrada/{id}/store', [EntradaController::class, 'store'])->name('entrada.store');
    Route::get('entrada/{id}/show', [EntradaController::class, 'show'])->name('entrada.show');

    // Saidas:
    Route::get('saida', [SaidaController::class,'index'])->name('saida.index');
    Route::post('saida/{id}/store', [SaidaController::class, 'store'])->name('saida.store');

    // Saldo:
    Route::resource('saldo', SaldoController::class);