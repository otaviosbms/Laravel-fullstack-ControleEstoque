<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saida;
use App\Models\Produto;


class SaidaController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        $saidas = [];

        foreach ($produtos as $produto) {
            $quantidades = $produto->saida()->pluck('quantidade');
            $saidas[$produto->id] = $quantidades;
        }

        return view('saida.index', compact('produtos', 'saidas', 'quantidades'));
    }

    // public function store(Request $request)
    // {
    //     $saida = Saida::create($request->all());

    //     // Atualizar a quantidade do produto
    //     $produto = Produto::find($saida->produto_id);
    //     $produto->quantidade -= $saida->quantidade;
    //     $produto->save();

    //     return redirect()->route('saidas.show', $saida->id);
    // }


}
