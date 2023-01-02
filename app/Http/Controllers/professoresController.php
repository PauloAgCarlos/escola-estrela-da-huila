<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\professores;
use Illuminate\Support\Facades\Auth;
use File;

class professoresController extends Controller
{
     
    public function index()
    {
        $professores = Professores::all();
        return view('professores.app_listar_professores', compact('professores'));
    }
    
    public function create()
    {
        $professores = Professores::all();
        return view('professores.app_registar_professor', compact('professores'));
    }
    
    public function store(Request $request)
    {

        $professor = new Professores();
        $professor->nome = $request->nome;
        $professor->sobrenome = $request->sobrenome;
        $professor->estadoCivil = $request->estadoCivil;
        $professor->habilitacao = $request->habilitacao;
        $professor->nascimento = $request->nascimento;
        $professor->endereco = $request->endereco;
        $professor->nacionalidade = $request->nacionalidade;
        $professor->telefonePrimario = $request->telefonePrimario;
        $professor->telefoneSecundario = $request->telefoneSecundario;
        $professor->genero = $request->genero;
        $professor->email = $request->email;
        $professor->emailSecundario = $request->emailSecundario;
        $professor->numeroBilhete = $request->numeroBilhete;
        $professor->numeroAgente = $request->numeroAgente;
        $professor->municipio = $request->municipio;
        $professor->disciplina = $request->disciplina;

       

        $professor->save();

        return redirect('/listar_professores');
    }
     
    public function show($id)
    {
        $professor = Professores::find($id);

        return view('professores.app_visualizar_professor', compact('professor'));
    }
     
    public function edit($id)
    {
        $professor = Professores::find($id);

        return view('professores.app_editar_professor', compact('professor'));
    }
     
    public function update(Request $request, $id)
    {
        $professor = Professores::find($id);

        $professor->nome = $request->nome;
        $professor->sobrenome = $request->sobrenome;
        $professor->estadoCivil = $request->estadoCivil;
        $professor->habilitacao = $request->habilitacao;
        $professor->nascimento = $request->nascimento;
        $professor->endereco = $request->endereco;
        $professor->nacionalidade = $request->nacionalidade;
        $professor->telefonePrimario = $request->telefonePrimario;
        $professor->telefoneSecundario = $request->telefoneSecundario;
        $professor->genero = $request->genero;
        $professor->email = $request->email;
        $professor->emailSecundario = $request->emailSecundario;
        $professor->numeroBilhete = $request->numeroBilhete;
        $professor->numeroAgente = $request->numeroAgente;
        $professor->municipio = $request->municipio;
        $professor->disciplina = $request->disciplina;

       

        $professor->save();

        return redirect('/listar_professores');
    }
     
    public function destroy($id)
    {
        Professores::destroy($id);

        return redirect('/listar_professores');
    }
}
