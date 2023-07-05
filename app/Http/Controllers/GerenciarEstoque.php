<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstoqueFormResquest;
use App\Models\Estoque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function store(EstoqueFormResquest $request)
    {

        Session::flash('mensagem', 'Item Adicionado com sucesso');

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

    public function update(EstoqueFormResquest $request, $id)
    {

        Session::flash('mensagem', 'Item Atualizado com sucesso');

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

        // Armazene a mensagem de notificação na sessão
        Session::flash('mensagem', 'Item excluído com sucesso');

        
        return redirect()->route('estoque.index');
    }


}
