<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Model\Pessoas;

class PessoasController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function inicio()
    {
        return view('inicio', compact('welcome', 'num', 'pessoas'));
    }

    public function novoUsuario()
    {
        return view('form_pessoa');
    }

    public function listar()
    {
        $pessoas = Pessoas::get();

        return view('listar_pessoas', compact('pessoas'));
    }

    public function save(Request $request)
    {
        $novaPessoa = new Pessoas();

        $novaPessoa->nome = $request->nome;
        $novaPessoa->email = $request->email;
        $novaPessoa->cpf = $request->cpf;
        $novaPessoa->rg = $request->rg;
        $novaPessoa->dtanascimento = $request->dtanascimento;


        $novaPessoa->save();

        return redirect('/listar_pessoas');
    }
    public function atualizar($id)
    {
        $pessoa = Pessoas::get();
        // $pessoa->atualizar();
        // dd($pessoa);
        return view('editar_pessoa', compact('pessoa', 'atualizar'));
    }
    public function delete($id)
    {
        $pessoa = Pessoas::find($id);
        $pessoa->delete();

        return redirect('/');
    }
}
