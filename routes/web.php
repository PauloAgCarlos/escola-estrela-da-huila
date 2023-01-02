<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome')->middleware('auth');
// });
Route::get('/','appController@index');
Route::get('/index.html','appController@index');
Route::get('/home','appController@index');
Route::get('/teste','appController@teste');
Route::get('/roles_users','adminController@roles_users');
Route::get('/permissions_roles','adminController@permissions_roles');
Route::post('/salvar_roles_users','adminController@salvar_roles_users')->middleware('auth');
Route::post('/salvar_permissions_roles','adminController@salvar_permissions_roles')->middleware('auth');

// ======================= FUNCIONÁRIOS ================================= 

Route::get('/listar_funcionarios','funcionariosController@index')->middleware('auth');
Route::get('/registar_funcionario','funcionariosController@create')->middleware('auth');
Route::get('/visualizar_funcionario/{id}','funcionariosController@show')->middleware('auth');
Route::get('/editar_funcionario/{id}','funcionariosController@edit')->middleware('auth');
Route::get('/remover_funcionario/{id}','funcionariosController@destroy')->middleware('auth');
Route::post('/salvar_funcionario','funcionariosController@store')->middleware('auth');
Route::post('/actualizar_funcionario/{id}','funcionariosController@update')->middleware('auth');


// ========================= CLASSES ====================================

Route::get('/listar_classes','classesController@index')->middleware('auth');
Route::get('/registar_classe','classesController@create')->middleware('auth');
Route::get('/visualizar_classe/{id}','classesController@show')->middleware('auth');
Route::get('/editar_classe/{id}','classesController@edit')->middleware('auth');
Route::get('/remover_classe/{id}','classesController@destroy')->middleware('auth');
Route::post('/salvar_classe','classesController@store')->middleware('auth');
Route::post('/actualizar_classe/{id}','classesController@update')->middleware('auth');


// ========================= CURSOS ====================================

Route::get('/listar_cursos','cursosController@index')->middleware('auth');
Route::get('/registar_curso','cursosController@create')->middleware('auth');
Route::get('/visualizar_curso/{id}','cursosController@show')->middleware('auth');
Route::get('/editar_curso/{id}','cursosController@edit')->middleware('auth');
Route::get('/remover_curso/{id}','cursosController@destroy')->middleware('auth');
Route::post('/salvar_curso','cursosController@store')->middleware('auth');
Route::post('/actualizar_curso/{id}','cursosController@update')->middleware('auth');


// ========================= DISCIPLINAS ====================================

Route::get('/listar_disciplinas','disciplinasController@index')->middleware('auth');
Route::get('/registar_disciplina','disciplinasController@create')->middleware('auth');
Route::get('/visualizar_disciplina/{id}','disciplinasController@show')->middleware('auth');
Route::get('/remover_disciplina/{id}','disciplinasController@destroy')->middleware('auth');
Route::get('/editar_disciplina/{id}','disciplinasController@edit')->middleware('auth');
Route::post('/salvar_disciplina','disciplinasController@store')->middleware('auth');
Route::post('/actualizar_disciplina/{id}','disciplinasController@update')->middleware('auth');


// ========================= MATRÍCULAS ====================================

Route::get('/listar_matriculas','matriculasController@index')->middleware('auth');
Route::post('/registar_matricula/{verificar}','matriculasController@verify')->middleware('auth');
Route::get('/registar_matricula','matriculasController@create')->middleware('auth');
Route::get('/visualizar_matricula/{id}','matriculasController@show')->middleware('auth');
Route::get('/editar_matricula/{id}','matriculasController@edit')->middleware('auth');
Route::get('/remover_matricula/{id}','matriculasController@destroy')->middleware('auth');
Route::post('/salvar_matricula','matriculasController@store')->middleware('auth');
Route::post('/actualizar_matricula/{id}','matriculasController@update')->middleware('auth');

// ========================= Estudantes ====================================

Route::get('/listar_estudantes','estudantesController@index')->middleware('auth');
Route::get('/registar_estudante','estudantesController@create')->middleware('auth');
Route::get('/editar_estudante/{id}','estudantesController@edit')->middleware('auth');
Route::get('/visualizar_estudante/{id}','estudantesController@show')->middleware('auth');
Route::get('/remover_estudante/{id}','estudantesController@destroy')->middleware('auth');
Route::post('/salvar_estudante','estudantesController@store')->middleware('auth');
Route::post('/actualizar_estudante/{id}','estudantesController@update')->middleware('auth');

// ========================= Turmas ====================================

Route::get('/listar_turmas','turmasController@index')->middleware('auth');
Route::get('/registar_turma','turmasController@create')->middleware('auth');
Route::get('/visualizar_turma/{id}','turmasController@show')->middleware('auth');
Route::get('/editar_turma/{id}','turmasController@edit')->middleware('auth');
Route::get('/remover_turma/{id}','turmasController@destroy')->middleware('auth');
Route::post('/salvar_turma','turmasController@store')->middleware('auth');
Route::post('/actualizar_turma/{id}','turmasController@update')->middleware('auth');

// ========================= Professores ====================================

Route::get('/listar_professores','professoresController@index')->middleware('auth');
Route::get('/registar_professor','professoresController@create')->middleware('auth');
Route::get('/visualizar_professor/{id}','professoresController@show')->middleware('auth');
Route::get('/editar_professor/{id}','professoresController@edit')->middleware('auth');
Route::get('/remover_professor/{id}','professoresController@destroy')->middleware('auth');
Route::post('/salvar_professor','professoresController@store')->middleware('auth');
Route::post('/actualizar_professor/{id}','professoresController@update')->middleware('auth');

Auth::routes();


Route::get('/certificado_habilitacao', 'pagamentosCertificadoController@index')->middleware('auth');

Route::get('/registar_certificado_habilitacao', 'pagamentosCertificadoController@create')->middleware('auth');

Route::post('/salvar_pagamento_certificado', 'pagamentosCertificadoController@store')->middleware('auth');

Route::get('/declaracao_habilitacao', 'pagamentosDeclaracaoController@index')->middleware('auth');

Route::get('/registar_declaracao_habilitacao', 'pagamentosDeclaracaoController@create')->middleware('auth');

Route::post('/salvar_pagamento_declaracao', 'pagamentosDeclaracaoController@store')->middleware('auth');

Route::get('/reclamacao_nota', 'reclamacaoNotasController@index')->middleware('auth');

Route::get('/registar_reclamacao_nota', 'reclamacaoNotasController@create')->middleware('auth');

Route::post('/salvar_reclamacao_nota', 'reclamacaoNotasController@store')->middleware('auth');

Route::get('/pagamento_transferencia', 'pagamentosTransferenciaController@index')->middleware('auth');

Route::get('/registar_pagamento_transferencia', 'pagamentosTransferenciaController@create')->middleware('auth');

Route::post('/salvar_pagamento_transferencia', 'pagamentosTransferenciaController@store')->middleware('auth');

Route::get('/pagamento_propina', 'pagamentosPropinaController@index')->middleware('auth');

Route::get('/registar_pagamento_propina', 'pagamentosPropinaController@create')->middleware('auth');

Route::post('/salvar_pagamento_propina', 'pagamentosPropinaController@store')->middleware('auth');



Route::get('/mini_pauta_estudante', 'appController@mini_pauta_estudante')->middleware('auth');
Route::get('/mini_pautas_professor', 'appController@mini_pautas_professor')->middleware('auth');
Route::get('/pedidos_declaracoes', 'appController@pedidos_declaracoes')->middleware('auth');
Route::get('/pedidos_transferencias', 'appController@pedidos_transferencias')->middleware('auth');
Route::get('/propinas', 'appController@propinas')->middleware('auth');
Route::get('/servicos', 'appController@servicos')->middleware('auth');
Route::get('/sobre', 'appController@sobre')->middleware('auth');
Route::get('/transferencias', 'appController@transferencias')->middleware('auth');
