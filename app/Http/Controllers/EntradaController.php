<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;
use App\Models\Produto;


class EntradaController extends Controller
{

    public function index()
    {
        $produtos = Produto::all();
        $entradas = [];

        foreach ($produtos as $produto) {
            $quantidades = $produto->entrada()->pluck('quantidade');
            $entradas[$produto->id] = $quantidades;
        }

        return view('entrada.index', compact('produtos', 'entradas', 'quantidades'));
    }


    // public function store(Request $request)
    // {
    //     $entrada = Entrada::create($request->quantidade());

    //     $produto = New Entrada();
    //     // Atualizar a quantidade do produto
    //     $produto = Produto::find($entrada->produto_id);
    //     $produto->quantidade += $entrada->quantidade;
    //     $produto->save();

    //     return redirect()->route('entradas.show', $entrada->id);
    // }

};