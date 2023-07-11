<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoFormResquest;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EstoqueController extends Controller
{
    public function index()
    {
        $estoque = Produto::query()->orderBy('nome')->get();

        return view('estoque.index', compact('estoque'));
    }

    public function create()
    {
        return view('estoque.create');
    }

    public function store(ProdutoFormResquest $request)
    {

        Session::flash('mensagem', 'Item Adicionado com sucesso');

        $estoque = new Produto();
        $estoque->nome = $request->input('nome');
        $estoque->validade = $request->input('validade');
        $estoque->valor = $request->input('valor');
        $estoque->save();

        return redirect()->route('estoque.index');
    }

    public function show($id)
    {
        $estoque = Produto::find($id);
        return view('estoque.show', compact('estoque'));
    }

    public function edit($id)
    {
        $estoque = Produto::find($id);
        return view('estoque.edit', compact('estoque'));
    }

    public function update(ProdutoFormResquest $request, $id)
    {

        Session::flash('mensagem', 'Item Atualizado com sucesso');

        $estoque = Produto::find($id);
        $estoque->nome = $request->input('nome');
        // $estoque->quantidade = $request->input('quantidade');
        $estoque->validade = $request->input('validade');
        $estoque->valor = $request->input('valor');
        $estoque->save();

        return redirect()->route('estoque.index');
    }

    public function destroy($id)
    {
        $estoque = Produto::find($id);
        $estoque->delete();

        // Armazene a mensagem de notificação na sessão
        Session::flash('mensagem', 'Item excluído com sucesso');


        return redirect()->route('estoque.index');
    }


}
