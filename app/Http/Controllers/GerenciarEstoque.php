<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use Illuminate\Http\Request;

class GerenciarEstoque extends Controller
{
    public function index()
    {
        $estoque = Estoque::all();

        return view('gerenciarEstoque.index', compact('estoque'));
    }

    public function create()
    {
        return view('gerenciarEstoque.create');
    }

    public function store(Request $request)
    {
        $estoque = new Estoque();
        $estoque->nome = $request->input('nome');
        $estoque->email = $request->input('email');
        $estoque->save();

        return redirect()->route('gerenciarEstoque.index');
    }

    public function show($id)
    {
        $estoque = Estoque::find($id);
        return view('gerenciarEstoque.show', compact('estoque'));
    }

    public function edit($id)
    {
        $estoque = Estoque::find($id);
        return view('gerenciarEstoque.edit', compact('estoque'));
    }

    public function update(Request $request, $id)
    {
        $estoque = Estoque::find($id);
        $estoque->nome = $request->input('nome');
        $estoque->email = $request->input('email');
        $estoque->save();

        return redirect()->route('gerenciarEstoque.index');
    }

    public function destroy($id)
    {
        $estoque = Estoque::find($id);
        $estoque->delete();

        return redirect()->route('gerenciarEstoque.index');
    }
}
