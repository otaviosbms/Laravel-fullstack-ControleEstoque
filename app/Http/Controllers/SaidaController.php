<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saida;
use App\Models\Produto;


class SaidaController extends Controller
{
    
    public function index()
    {
        $produto = Produto::findOrFail(1);
        dd($quantidade = $produto->saida()->pluck('quantidade'));

        return view('saida.index', compact('produtos'));
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
