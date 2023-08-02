<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\SaidaController;
use App\Http\Controllers\SaldoController;
use App\Http\Middleware\Autenticador;

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

    Route::get('/',function(){
        return redirect('/saldo');
    })->middleware(Autenticador::class);

    // Cadastro:
    Route::resource('cadastro', CadastroController::class);

    // Entradas:
    Route::get('entrada', [EntradaController::class,'index'])->name('entrada.index');
    Route::post('entrada/{id}/store', [EntradaController::class, 'store'])->name('entrada.store');
    Route::get('entrada/{id}/show', [EntradaController::class, 'show'])->name('entrada.show');

    // Saidas:
    Route::get('saida', [SaidaController::class,'index'])->name('saida.index');
    Route::post('saida/{id}/store', [SaidaController::class, 'store'])->name('saida.store');

    // Saldo:
    Route::get('saldo', [SaldoController::class,'index'])->name('saldo.index');

    // Login:
    Route::get('login', [LoginController::class, 'index'])->name('entrar');
    Route::post('login', [LoginController::class, 'login'])->name('login');