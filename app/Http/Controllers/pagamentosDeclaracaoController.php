<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pagamentosDeclaracao; 

class pagamentosDeclaracaoController extends Controller
{
    public function index()
    {
        //
        $pagamentos = pagamentosDeclaracao::all();
        return view('estudantes.app_declaracao_habilitacoes', compact('pagamentos'));
    }

    public function create()
    {
        //
        return view('estudantes.app_registar_declaracao_habilitacao');
    }
    public function store(Request $request)
    {
        //


        $pagamento = new pagamentosDeclaracao();
        $pagamento->aluno = $request->aluno;
        $pagamento->numero_matricula = $request->numero_matricula;
        $pagamento->mes = $request->mes;
        $pagamento->valor = $request->valor;

        $pagamento->save();

        return redirect('/declaracao_habilitacao');
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
