<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class SaldoController extends Controller
{
    public function index()
    {
        $cadastros = Produto::query()->orderBy('nome');

        return view('saldo.index', compact('cadastros'));
    }
}
