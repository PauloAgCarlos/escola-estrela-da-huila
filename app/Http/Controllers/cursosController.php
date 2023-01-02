<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cursos;
use Illuminate\Support\Facades\Auth;
use File;


class cursosController extends Controller
{
     public function index()
    {
        $cursos = Cursos::all();
        return view('cursos.app_listar_cursos', compact('cursos'));
    }
    
    public function create()
    {
        $cursos = Cursos::all();
        return view('cursos.app_registar_curso', compact('cursos'));
    }
    
    public function store(Request $request)
    {

        $curso = new Cursos();
        $curso->nome = $request->nome;
        $curso->sigla = $request->sigla;
        $curso->descricao = $request->descricao;
        $curso->imagem = "";

        $curso->save();

        // Verificando se a imagem é válida
        if ($request->imagem) {
            $imagem = $request->imagem;
            $extensaoI =  $imagem->getClientOriginalExtension();
            if ($extensaoI!= 'jpg' && $extensaoI!= 'png') {
                return back()->with('erro', 'Erro: imagem inválida');
            }
        }
 
         $curso->save();
        // Guardar a imagem na base de dados

         if ($request->imagem) {
            File::move($imagem, public_path().'/img/cursos/imag_'.$curso->id.'.'.$extensaoI);
            $curso->imagem = '/img/cursos/imag_'.$curso->id.'.'.$extensaoI;
            $curso->save();
        } 

        $curso->save();

        return redirect('/listar_cursos');
    }
     
    public function show($id)
    {
        $curso = Cursos::find($id);

        return view('cursos.app_visualizar_curso', compact('curso'));
    }
     
    public function edit($id)
    {
        $curso = Cursos::find($id);

        return view('cursos.app_editar_curso', compact('curso'));
    }
     
    public function update(Request $request, $id)
    {
        $curso = Cursos::find($id);

        $curso->nome = $request->nome;
        $curso->sigla = $request->sigla;
        $curso->descricao = $request->descricao;


        // Verificando se a imagem é válida
        if ($request->imagem) {
            $imagem = $request->imagem;
            $extensaoI =  $imagem->getClientOriginalExtension();
            if ($extensaoI!= 'jpg' && $extensaoI!= 'png') {
                return back()->with('erro', 'Erro: imagem inválida');
            }
        }
 
         $curso->save();
        // Guardar a imagem na base de dados

         if ($request->imagem) {
            File::move($imagem, public_path().'/img/cursos/imag_'.$curso->id.'.'.$extensaoI);
            $curso->imagem = '/img/cursos/imag_'.$curso->id.'.'.$extensaoI;
            $curso->save();
        } 

        $curso->save();

        return redirect('/listar_cursos');
    }
     
    public function destroy($id)
    {
        Cursos::destroy($id);

        return redirect('/listar_cursos');
    }
}
