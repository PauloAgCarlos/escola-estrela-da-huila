<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudantes;
use Illuminate\Support\Facades\Auth;
use File;

class estudantesController extends Controller
{
     
     public function index()
    {
        $estudantes = Estudantes::all();
        return view('estudantes.app_listar_estudantes', compact('estudantes'));
    }
    
    public function create()
    {
        $estudantes = Estudantes::all();
        return view('estudantes.app_registar_estudante', compact('estudantes'));
    }
    
    public function store(Request $request)
    {

        $estudante = new Estudantes();
        $estudante->nome = $request->nome;
        $estudante->sobrenome = $request->sobrenome;
        $estudante->nascimento = $request->nascimento;
        $estudante->pai = $request->pai;
        $estudante->mae = $request->mae;
        $estudante->endereco = $request->endereco;
        $estudante->telefonePrimario = $request->telefonePrimario;
        $estudante->telefoneSecundario = $request->telefoneSecundario;
        $estudante->email = $request->email;
        $estudante->numeroDocumento = $request->numeroDocumento;
        $estudante->municipio = $request->municipio;


        $estudante->save();

        return redirect('/listar_estudantes');
    }
     
    public function show($id)
    {
        $estudante = Estudantes::find($id);

        return view('estudantes.app_visualizar_estudante', compact('estudante'));
    }
     
    public function edit($id)
    {
        $estudante = Estudantes::find($id);

        return view('estudantes.app_editar_estudante', compact('estudante'));
    }
     
    public function update(Request $request, $id)
    {
        $estudante = Estudantes::find($id);

        $estudante->nome = $request->nome;
        $estudante->sobrenome = $request->sobrenome;
        $estudante->nascimento = $request->nascimento;
        $estudante->pai = $request->pai;
        $estudante->mae = $request->mae;
        $estudante->endereco = $request->endereco;
        $estudante->telefonePrimario = $request->telefonePrimario;
        $estudante->telefoneSecundario = $request->telefoneSecundario;
        $estudante->email = $request->email;
        $estudante->numeroDocumento = $request->numeroDocumento;
        $estudante->municipio = $request->municipio;

       

        $estudante->save();

        return redirect('/listar_estudantes');
    }
     
    public function destroy($id)
    {
        Estudantes::destroy($id);

        return redirect('/listar_estudantes');
    }
}
