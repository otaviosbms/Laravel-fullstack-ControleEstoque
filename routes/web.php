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
    Route::get('entrada', [EntradaController::class,'index'])->name('entrada.index')->middleware(Autenticador::class);
    Route::post('entrada/{id}/store', [EntradaController::class, 'store'])->name('entrada.store')->middleware(Autenticador::class);
    Route::get('entrada/{id}/show', [EntradaController::class, 'show'])->name('entrada.show')->middleware(Autenticador::class);

    // Saidas:
    Route::get('saida', [SaidaController::class,'index'])->name('saida.index')->middleware(Autenticador::class);
    Route::post('saida/{id}/store', [SaidaController::class, 'store'])->name('saida.store')->middleware(Autenticador::class);
    Route::get('saida/{id}/show', [SaidaController::class, 'show'])->name('saida.show')->middleware(Autenticador::class);

    // Saldo:
    Route::get('saldo', [SaldoController::class,'index'])->name('saldo.index');


    // Login:
    Route::get('entrar', [LoginController::class, 'index'])->name('entrar');
    Route::post('entrar', [LoginController::class, 'login'])->name('login');

    Route::get('sair', [LoginController::class, 'logout'])->name('logout');

    // Create User:
    Route::get('registro', [LoginController::class, 'create'])->name('criar');
    Route::post('registro', [LoginController::class, 'store'])->name('registrar');


    Route::get('/email', function () {
         return new \App\Mail\CadastroProduto('teste',1,1,'teste','teste');
    });