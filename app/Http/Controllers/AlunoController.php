<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function pesquisar(){

        $alunos=Aluno::all();
        foreach ($alunos as $aluno){
            echo $aluno->nome. "<br>";        }
        return view('aluno.pesquisar')->with('alunos', $alunos);

    }
}
