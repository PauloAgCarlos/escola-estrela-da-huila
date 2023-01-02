<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pagamentosCertificado; 

class pagamentosCertificadoController extends Controller
{
    public function index()
    {
        //
        $pagamentos = pagamentosCertificado::all();
        return view('estudantes.app_certificado_habilitacao', compact('pagamentos'));
    }

    public function create()
    {
        //
        return view('estudantes.app_registar_certificado_habilitacao');
    }

    public function store(Request $request)
    {
        //



        $pagamento = new pagamentosCertificado();
        $pagamento->aluno = $request->aluno;
        $pagamento->numero_matricula = $request->numero_matricula;
        $pagamento->mes = $request->mes;
        $pagamento->valor = $request->valor;

        $pagamento->save();

        return redirect('/certificado_habilitacao');
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
