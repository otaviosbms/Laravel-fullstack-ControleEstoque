<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class SaldoController extends Controller
{
    public function index()
    {
        $cadastro = Produto::query()->orderBy('nome')->get();

        return view('saldo.index', compact('cadastro'));
    }
}
