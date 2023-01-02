<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matriculas;
use App\Cursos;
use App\Classes;
use App\Estudantes;
use App\Funcionarios;
use App\Turmas;
use App\User;
use Illuminate\Support\Facades\Auth;
use File;


class matriculasController extends Controller
{
     
    public function index()
    {
        $matriculas = Matriculas::all();
        return view('matriculas.app_listar_matriculas', compact('matriculas'));
    }
    
    public function create()
    {
        $estudante = "vazio";
        $cursos = Cursos::all();
        $matriculas = Matriculas::all();
        $classes = Classes::all();
        $estudantes = Estudantes::all();
        $funcionarios = Funcionarios::all();
        $turmas = Turmas::all();
        $usuarios = User::all();
        return view('matriculas.app_registar_matricula', compact('cursos','matriculas','classes','estudantes','funcionarios','turmas','usuarios','estudante'));
    }

    public function verify(Request $request, $id)
    {
        $estudante = "vazio";
        $cursos = Cursos::all();
        $matriculas = Matriculas::all();
        $classes = Classes::all();
        $estudante = Estudantes::where('numeroDocumento',$request->n_documento)->first();
        $estudantes = Estudantes::all();
        $funcionarios = Funcionarios::all();
        $turmas = Turmas::all();
        $usuarios = User::all();       
        
        return view('matriculas.app_registar_matricula', compact('cursos','matriculas','classes','estudantes','funcionarios','turmas','usuarios', 'estudante'));
    }
    
    public function store(Request $request)
    {

        $matricula = new matriculas();
        $matricula->curso_id = $request->curso_id;
        // $matricula->sala_id = $request->sala_id;
        $matricula->classe_id = $request->classe_id;
        $matricula->user_id = Auth::id();
        $matricula->turma_id = $request->turma_id;
        $matricula->aluno_id = $request->estudante_id;
        // $matricula->anoLectivo_id = $request->anoLectivo_id;

        $matricula->save();

        return redirect('listar_matriculas');
    }
     
    public function show($id)
    {
        $matricula = Matriculas::find($id);
        $cursos = Cursos::all();
        $matriculas = Matriculas::all();
        $classes = Classes::all();
        $estudantes = Estudantes::all();
        $funcionarios = Funcionarios::all();
        $turmas = Turmas::all();
        $usuarios = User::all();
        $aluno = Estudantes::find($matricula->aluno_id);
        // return $matricula;
        return view('matriculas.app_visualizar_matricula', compact('matricula','cursos','matriculas','classes','estudantes','funcionarios','turmas','usuarios','aluno'));

    }
     
    public function edit($id)
    {
        $matricula = Matriculas::find($id);
        $cursos = Cursos::all();
        $matriculas = Matriculas::all();
        $classes = Classes::all();
        $estudantes = Estudantes::all();
        $funcionarios = Funcionarios::all();
        $turmas = Turmas::all();
        $usuarios = User::all();
        $aluno = Estudantes::find($matricula->aluno_id);
        // return $matricula;
        return view('matriculas.app_editar_matricula', compact('matricula','cursos','matriculas','classes','estudantes','funcionarios','turmas','usuarios','aluno'));
    }
     
    public function update(Request $request, $id)
    {
        $matricula = Matriculas::find($id);

        $matricula->curso_id = $request->curso_id;
        // $matricula->sala_id = $request->sala_id;
        $matricula->classe_id = $request->classe_id;
        $matricula->funcionario_id = $request->funcionario_id;
        $matricula->user_id = $request->user_id;
        $matricula->turma_id = $request->turma_id;
        $matricula->aluno_id = $request->estudante_id;
        // $matricula->anoLectivo_id = $request->anoLectivo_id;

        $matricula->save();

        return redirect('listar_matriculas');
    }
     
    public function destroy($id)
    {
        Matriculas::destroy($id);

        return redirect('/matriculas');
    }
}
