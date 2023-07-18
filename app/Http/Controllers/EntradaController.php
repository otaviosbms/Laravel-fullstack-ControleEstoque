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

        $produtos = Produto::with('entrada')->get();

        return view('entrada.index', compact('produtos'));
    }

    
    public function store(EntradaESaidaFormRequest $request, $id)
    {
        Entrada::create([
            'quantidade' => $request->input('quantidade'),
            'entrada_FkProdutoId' => $id
        ]);

        $estoque = Produto::find($id);
        $estoque->quantidade += $request->input('quantidade');
        $estoque->save();

        return redirect()->route('entrada.index');
    }

    public function show($id)
    {

        

    }

};