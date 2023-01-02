<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionarios;
use Illuminate\Support\Facades\Auth;
use File;

class funcionariosController extends Controller
{
     
    public function index()
    {
        //
        $funcionarios = funcionarios::all();
        return view('funcionarios.app_listar_funcionarios', compact('funcionarios'));
    }

    
    public function create()
    {
        //
        $funcionarios = funcionarios::all();
        return view('funcionarios.app_registar_funcionario', compact('funcionarios'));
    }

    
    public function store(Request $request)
    {
        
        $funcionario = new Funcionarios();
        $funcionario->nome = $request->nome;
        $funcionario->sobrenome = $request->sobrenome;
        $funcionario->endereco = $request->endereco;
        $funcionario->numeroBilhete = $request->numeroBilhete;
        $funcionario->genero = $request->genero;
        $funcionario->dataNascimento = $request->dataNascimento;
        $funcionario->nacionalidade = $request->nacionalidade;
        $funcionario->telefone = $request->telefone;
        $funcionario->telemovel = $request->telemovel;
        $funcionario->emailPrincipal = $request->emailPrincipal;
        $funcionario->emailSecundario = $request->emailSecundario;
        $funcionario->estadoCivil = $request->estadoCivil;
        $funcionario->habilitacao = $request->habilitacao;
        $funcionario->numeroAgente = $request->numeroAgente;
        $funcionario->municipio = $request->municipio;
        $funcionario->utilizador = Auth::id();


        $funcionario->save();

        return redirect('/listar_funcionarios');
    }

     
    public function show($id)
    {
        //
        $funcionario = Funcionarios::find($id);
        

        return view('funcionarios.app_visualizar_funcionario', compact('funcionario'));
    }

     
    public function edit($id)
    {
        //
        $funcionario = Funcionarios::find($id);

        // return $funcionario;

        return view('funcionarios.app_editar_funcionario', compact('funcionario', compact('funcionario')));
    }

     
    public function update(Request $request, $id)
    {
        //  
        // return $request;
        $funcionario = Funcionarios::find($id);

        $funcionario->nome = $request->nome;
        $funcionario->sobrenome = $request->sobrenome;
        $funcionario->endereco = $request->endereco;
        $funcionario->numeroBilhete = $request->numeroBilhete;
        $funcionario->genero = $request->genero;
        $funcionario->dataNascimento = $request->dataNascimento;
        $funcionario->nacionalidade = $request->nacionalidade;
        $funcionario->telefone = $request->telefone;
        $funcionario->telemovel = $request->telemovel;
        $funcionario->emailPrincipal = $request->emailPrincipal;
        $funcionario->emailSecundario = $request->emailSecundario;
        $funcionario->estadoCivil = $request->estadoCivil;
        $funcionario->habilitacao = $request->habilitacao;
        $funcionario->numeroAgente = $request->numeroAgente;
        $funcionario->municipio = $request->municipio;
        $funcionario->utilizador = Auth::id();


        $funcionario->save();

        return redirect('/listar_funcionarios');
    }

     
    public function destroy($id)
    {
        //
        Funcionarios::destroy($id);

        return redirect('/listar_funcionarios');
    }
}
