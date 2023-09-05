<?php

namespace App\Http\Controllers;

use App\Events\EmailUsuario;
use App\Http\Middleware\Autenticador;
use App\Http\Requests\ProdutoFormRequest;
use App\Mail\CadastroProduto;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CadastroController extends Controller
{

    public function __construct()
    {
        
        $this->middleware(Autenticador::class)->except('index','show');

    }

    public function index()
    {
        $cadastro = Produto::query()->orderBy('nome')->get();

        return view('cadastro.index', compact('cadastro'));
    }

    public function create()
    {
        return view('cadastro.create');
    }

    public function store(ProdutoFormRequest $request)
    {
        Session::flash('mensagem', 'Item adicionado com sucesso');

        $cadastro = new Produto();
        $cadastro->nome = $request->input('nome');

        if ($request->filled('validade')) {
            $cadastro->validade = $request->input('validade');
        }

        $cadastro->valor = $request->input('valor');

        if ($request->filled('descricao')) {
            $cadastro->descricao = $request->input('descricao');
        }

        $cadastro->save();

        EmailUsuario::dispatch(

            $cadastro->nome,
            $cadastro->id,
            $cadastro->valor,
            $cadastro->descricao,
            $cadastro->created_at,

        );


        return redirect()->route('cadastro.index');
    }


    public function show($id)
    {
        $cadastro = Produto::find($id);
        return view('cadastro.show', compact('cadastro'));
    }

    public function edit($id)
    {
        $cadastro = Produto::find($id);
        return view('cadastro.edit', compact('cadastro'));
    }

    public function update(ProdutoFormRequest $request, $id)
    {

        Session::flash('mensagem', 'Item Atualizado com sucesso');

        $cadastro = Produto::find($id);
        $cadastro->nome = $request->input('nome');
        // $cadastro->quantidade = $request->input('quantidade');
        $cadastro->validade = $request->input('validade');
        $cadastro->valor = $request->input('valor');
        $cadastro->descricao = $request->input('descricao');
        $cadastro->save();

        return redirect()->route('cadastro.index');
    }

    public function destroy($id)
    {
        $cadastro = Produto::find($id);
        $cadastro->delete();

        // Armazene a mensagem de notificação na sessão
        Session::flash('mensagem', 'Item excluído com sucesso');


        return redirect()->route('cadastro.index');
    }


}
