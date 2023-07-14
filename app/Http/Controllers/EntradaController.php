<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntradaESaidaFormRequest;
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
            $quantidade = $produto->entrada()->pluck('quantidade');
            $entradas[$produto->id] = $quantidade;
        }

        return view('entrada.index', compact('produtos', 'entradas'));
    }

    
    public function store(EntradaESaidaFormRequest $request, $id)
    {


        $entrada = new Entrada();   

        $entrada->quantidade = $request->input('quantidade');
        $entrada->entrada_FkProdutoId = $id;
        $entrada->save();


        $estoque = Produto::find($id);
        $estoque->quantidade += $request->input('quantidade');
        $estoque->save();


        return redirect()->route('entrada.index');
    }

    public function show($id)
    {

    }

};