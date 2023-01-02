<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turmas;
use Illuminate\Support\Facades\Auth;
use File;

class turmasController extends Controller
{
    
    public function index()
    {
        //
        $turmas = Turmas::all();
        return view('turmas.app_listar_turmas', compact('turmas'));
    }

    
    public function create()
    {
        //
        $turmas = Turmas::all();
        return view('turmas.app_registar_turma', compact('turmas'));
    }

    
    public function store(Request $request)
    {
        
        $turma = new Turmas();
        $turma->nome = $request->nome;
        $turma->numeroMaximo = $request->numeroMaximo;
        $turma->numeroMinimo = $request->numeroMinimo;
        $turma->periodo = $request->periodo;


        $turma->save();

        return redirect('/registar_turma');
    }

     
    public function show($id)
    {
        //
        $turma = Turmas::find($id);
        

        return view('turmas.app_visualizar_turma', compact('turma'));
    }

     
    public function edit($id)
    {
        //
        $turma = Turmas::find($id);

        return view('turmas.app_editar_turma', compact('turma'));
    }

     
    public function update(Request $request, $id)
    {
        //
        $turma = Turmas::find($id);

        $turma->nome = $request->nome;
        $turma->numeroMaximo = $request->numeroMaximo;
        $turma->numeroMinimo = $request->numeroMinimo;
        $turma->periodo = $request->periodo;


        $turma->save();

        return redirect('/listar_turmas');
    }

     
    public function destroy($id)
    {
        //
        Turmas::destroy($id);

        return redirect('/listar_turmas');
    }
}
