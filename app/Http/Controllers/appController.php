<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cursos;
use App\User;
use App\Models\Role;
use App\Models\RolesUsers;
use App\Models\Permission;
use Illuminate\Support\Facades\Auth;
use File;

class appController extends Controller
{
    //
    public function index(){

    	$cursos = Cursos::all();
    	return view('app_index', compact('cursos'));
    }

    public function dashboard(){

        return view('app_dashboard');
    }

    
    public function certificado_habilitacao(){

    	return view('estudantes.app_certificado_habilitacao');
    }
    public function declaracao_habilitacoes(){

    	return view('estudantes.app_declaracao_habilitacoes');
    }
    public function mini_pauta_estudante(){

    	return view('estudantes.app_mini_pauta');
    }
    public function mini_pautas_professor(){

        return view('professores.app_mini_pautas');
    }
    public function pedidos_declaracoes(){

    	return view('estudantes.app_pedidos_declaracoes');
    }
    public function pedidos_transferencias(){

    	return view('estudantes.app_pedidos_transferencias');
    }
    public function propinas(){

    	return view('estudantes.app_propinas');
    }
    public function servicos(){

    	return view('app_servicos');
    }
    public function sobre(){

    	return view('app_sobre');
    }
    public function transferencias(){

    	return view('app_transferencias');
    }
}
