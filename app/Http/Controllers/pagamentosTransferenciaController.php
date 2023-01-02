<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pagamentosTransferencia; 

class pagamentosTransferenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pagamentos = pagamentosTransferencia::all();
        return view('app_transferencias', compact('pagamentos'));
    }

    public function create()
    {
        //
        return view('estudantes.app_registar_pagamento_transferencia');
    }
    public function store(Request $request)
    {
        //


        $pagamento = new pagamentosTransferencia();
        $pagamento->aluno = $request->aluno;
        $pagamento->numero_matricula = $request->numero_matricula;
        $pagamento->mes = $request->mes;
        $pagamento->valor = $request->valor;

        $pagamento->save();

        return redirect('/pagamento_transferencia');
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
