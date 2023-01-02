<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reclamacaoNota; 

class reclamacaoNotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reclamacoes = reclamacaoNota::all();

        return $reclamacoes;
        // return view('estudantes.app_declaracao_habilitacoes', compact('pagamentos'));
    }

    public function create()
    {
        //
        return view('estudantes.app_registar_reclamacao_nota');
    }
    public function store(Request $request)
    {
        //


        $pagamento = new reclamacaoNota();
        $pagamento->nome = $request->nome;
        $pagamento->curso = $request->curso;
        $pagamento->disciplina = $request->disciplina;
        $pagamento->mensagem = $request->mensagem;

        $pagamento->save();

        return redirect('/reclamacao_nota');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
