<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disciplinas;
use App\Cursos;
use Illuminate\Support\Facades\Auth;
use File;


class disciplinasController extends Controller
{
    
    public function index()
    {
        $disciplinas = Disciplinas::all();
        return view('disciplinas.app_listar_disciplinas', compact('disciplinas'));
    }
    
    public function create()
    {
        $cursos = Cursos::all();
        return view('disciplinas.app_registar_disciplina', compact('cursos'));
    }
    
    public function store(Request $request)
    {
        $disciplina = new Disciplinas();
        $disciplina->nome = $request->nome;
        $disciplina->sigla = $request->sigla;
        $disciplina->descricao = $request->descricao;
        $disciplina->curso_id = $request->curso_id;

        $disciplina->save();

        return redirect('/listar_disciplinas');
    }
     
    public function show($id)
    {
        $cursos = Cursos::all();
        $disciplina = Disciplinas::find($id);

        return view('disciplinas.app_visualizar_disciplina', compact('disciplina','cursos'));
    }
     
    public function edit($id)
    {
        $cursos = Cursos::all();
        $disciplina = Disciplinas::find($id);

        return view('disciplinas.app_editar_disciplina', compact('disciplina', 'cursos'));
    }
     
    public function update(Request $request, $id)
    {
        $disciplina = Disciplinas::find($id);

        $disciplina->nome = $request->nome;
        $disciplina->sigla = $request->sigla;
        $disciplina->descricao = $request->descricao;
        $disciplina->curso_id = $request->curso_id;

        $disciplina->save();

        return redirect('/listar_disciplinas');
    }
     
    public function destroy($id)
    {
        Disciplinas::destroy($id);

        return redirect('/listar_disciplinas');
    }
}
