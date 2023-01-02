<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
use Illuminate\Support\Facades\Auth;
use File;

class classesController extends Controller
{
    public function index()
    {
        $classes = Classes::all();
        return view('classes.app_listar_classes', compact('classes'));
    }
    
    public function create()
    {
        $classes = Classes::all();
        return view('classes.app_registar_classe', compact('classes'));
    }

    
    public function store(Request $request)
    {
        $classe = new Classes();
        $classe->titulo = $request->titulo;

        $classe->save();

        return redirect('/listar_classes');
    }

     
    public function show($id)
    {
        $classe = Classes::find($id);

        return view('classes.app_visualizar_classe', compact('classe'));
    }

     
    public function edit($id)
    {
        $classe = Classes::find($id);

        return view('classes.app_editar_classe', compact('classe'));
    }

     
    public function update(Request $request, $id)
    {
        $classe = Classes::find($id);

        $classe->titulo = $request->titulo;

        $classe->save();

        return redirect('listar_classes');
    }

     
    public function destroy($id)
    {
        Classes::destroy($id);

        return redirect('/listar_classes');
    }
}
