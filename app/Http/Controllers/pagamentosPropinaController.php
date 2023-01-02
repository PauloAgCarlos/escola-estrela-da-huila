<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pagamentosPropina; 

class pagamentosPropinaController extends Controller
{
    
    public function index()
    {
        //
        $pagamentos = pagamentosPropina::all();
        return view('estudantes.app_propinas', compact('pagamentos'));
    }

    public function create()
    {
        //
        return view('estudantes.app_registar_pagamento_propina');
    }
    public function store(Request $request)
    {
        //


        $pagamento = new pagamentosPropina();
        $pagamento->aluno = $request->aluno;
        $pagamento->numero_matricula = $request->numero_matricula;
        $pagamento->mes = $request->mes;
        $pagamento->valor = $request->valor;

        $pagamento->save();

        return redirect('/pagamento_propina');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
