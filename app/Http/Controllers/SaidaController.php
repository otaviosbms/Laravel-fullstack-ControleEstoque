<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntradaESaidaFormRequest;
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

        return view('saida.index', compact('produtos', 'saidas'));
    }

    public function store(EntradaESaidaFormRequest $request, $id)
    {

        $saida = new Saida();   

        $saida->quantidade = $request->input('quantidade');
        $saida->saida_FkProdutoId = $id;
        $saida->save();



        $estoque = Produto::find($id);
        $estoque->quantidade -= $request->input('quantidade');
        $estoque->save();


        return redirect()->route('saida.index');
    }


}
