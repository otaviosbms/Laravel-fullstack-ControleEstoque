<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use Illuminate\Http\Request;

class GerenciarEstoque extends Controller
{
    public function index()
    {
        $estoque = Estoque::query()->orderBy('nome')->get();

        return view('index', compact('estoque'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $estoque = new Estoque();
        $estoque->nome = $request->input('nome');
        $estoque->quantidade = $request->input('quantidade');
        $estoque->validade = $request->input('validade');
        $estoque->valor = $request->input('valor');
        $estoque->save();

        return redirect()->route('estoque.index');
    }

    public function show($id)
    {
        $estoque = Estoque::find($id);
        return view('show', compact('estoque'));
    }

    public function edit($id)
    {
        $estoque = Estoque::find($id);
        return view('edit', compact('estoque'));
    }

    public function update(Request $request, $id)
    {
        $estoque = Estoque::find($id);
        $estoque->nome = $request->input('nome');
        $estoque->quantidade = $request->input('quantidade');
        $estoque->validade = $request->input('validade');
        $estoque->valor = $request->input('valor');
        $estoque->save();

        return redirect()->route('estoque.index');
    }

    public function destroy($id)
    {
        $estoque = Estoque::find($id);
        $estoque->delete();
        
        return redirect()->route('estoque.index');
    }
}
