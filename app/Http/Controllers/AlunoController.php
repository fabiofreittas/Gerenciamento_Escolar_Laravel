<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AlunoController extends Controller
{
    public function pesquisar()
    {

        //$alunos=Aluno::all();
        // foreach ($alunos as $aluno){
        //   echo $aluno->nome. "<br>";        }
        //return view('aluno.pesquisar')->with('alunos', $alunos);

        $nome = Input::get('nome');
        $alunos = Aluno::where('nome', 'like', '%' . $nome . '%')->get();
        return view('aluno.pesquisar')->with('alunos', $alunos);
    }


    public function mostrar_inserir()
    {
        return view('aluno.inserir');
    }

    public function inserir()
    {
        $aluno = new Aluno();
        $aluno->nome = Input::get('nome');
        $aluno->nascimento = Input::get('nascimento');
        $aluno->endereco = Input::get('endereco');
        $aluno->serie = Input::get('serie');

        $aluno->save();

        $mensagem = "Cadastro inserido!";

        return view('aluno.inserir')->with('mensagem', $mensagem);
    }

    public function mostrar_alterar($id)
    {
        $aluno = Aluno::find($id);
        return view('aluno.alterar')->with('aluno', $aluno);
    }

    public function alterar()
    {
        $id = Input::get('id');
        $a = Aluno::find($id);

        $a->nome = Input::get('nome');
        $a->nascimento = Input::get('nascimento');
        $a->endereco = Input::get('endereco');
        $a->serie = Input::get('serie');

        $a->save();

        $mensagem = "Cadastro alterado com sucesso!";
        $alunos = Aluno::all();
        return view('aluno.pesquisar')->with('mensagem', $mensagem)->with('alunos', $alunos);


    }

    public function excluir($id)
    {
        $aluno = Aluno::find($id);

        $aluno->delete();

        $mensagem = "Cadastro excluído com sucesso!";

        $alunos = Aluno::all();
        return view('aluno.pesquisar')->with('mensagem', $mensagem)->with('alunos', $alunos);
    }
}