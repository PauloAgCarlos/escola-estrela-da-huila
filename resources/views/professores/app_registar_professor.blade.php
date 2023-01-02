@extends('layouts.app2')

@section('content')

@can('add_role')
                       


               <div class="bg-white">
                    
                        <form action="/salvar_professor" method="post">
                        	@csrf
                           <fieldset>
                               <legend>Informaçoes Pessoais</legend>

                            <div class="form-group">
                                    <label>Nome </label>
                                <input type="text" class="form-control" placeholder="Nome completo do funcionario " name="nome">
    
                                </div>
                                 <div class="form-group">
                                 <label>Sobrenome</label>
    
                                <input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome">
    
                                </div>
                                <div class="form-group">
                                <label>Endereco </label>
                                    <input type="date" class="form-control" name="endereco">
    
                                </div>
                                <div class="form-group">
                                <label>Nº BI </label>
                                    <input type="text" class="form-control" placeholder="BI" name="numeroBilhete">
        
                                </div>
                                <div class="form-group">
                                <label>Genero </label><br>
                                    Masculino<input type="radio"  name="genero">
                    
                                    Femenino  <input type="radio"  name="genero">
        
                                </div>
                                <div class="form-group">
                                <label>Nascimento</label>
                                    <input type="date" class="form-control" placeholder="endereco" name="nascimento">
        
                                </div>
                                <div class="form-group">
                                <label>Nacionalidade</label>
                                    <input type="text" class="form-control" placeholder="Sua Nacionalidade" name="nacionalidade">
        
                                </div>
                                <div class="form-group">
                                <label>Telefone</label>
                                    <input type="text" class="form-control" placeholder="Telefone" name="telefonePrimario">
        
                                </div>
                                <div class="form-group">
                                <label>Telemovel</label>
                                    <input type="text" class="form-control" placeholder="Seu Telemovel" name="telefoneSecundario">
        
                                </div>

                                <div class="form-group">
                                <label>Data do Cadastro</label>
                                    <input type="date" class="form-control"  name="data_cadastro">
        
                                </div>
                                <div class="form-group">
                                <label>Email principal</label>
                                    <input type="email" class="form-control" placeholder="Selecione o municipio" name="email">
        
                                </div>
                                <div class="form-group">
                                <label>Email Secundario</label>
                                    <input type="email" class="form-control" placeholder="Utilizador" name="emailSecundario">
        
                                </div>
                                <div class="form-group">
                                <label>Estdo civil</label>
                                    <select type="text" class="form-control"  name="estadoCivil">
                                            <option>Solteiro</option>
                                            <option>Casado</option>
                                    </select>
        
                                </div>
                                <div class="form-group">
                                <label>Habilitaçao</label>
                                    <select type="text" class="form-control"  name="habilitacao">
                                            <option>Bacharel</option>
                                            <option>Licenciado</option>
                                            <option>Tecnico Medio</option>
                                    </select>
        
                                </div>
                                <div class="form-group">
                                <label>Numero Agente </label>
                                    <input type="number" class="form-control" placeholder="Utilizador" name="numeroAgente">
        
                                </div>

                               
                                <div class="form-group">

                              
                                        <label>Municipio</label>
                                            <select type="text" class="form-control"  name="municipio">
                                                    <option>Lubango</option>
                                                    <option>Humpata</option>
                                                    <option>Chibia</option>
                                                    <option>Caluquembe</option>
                                                    <option>Caconda</option>
                                                    <option>Jamba</option>
                                                    <option>Chicomba</option>
                                                    <option>Kipungo</option>
                                                    <option>Gambos</option>
                                            </select>
                
                                     
                                   
        
                                </div>
                                <div class="form-group">
                                <label>Utilizador</label>
                                    <input type="text" class="form-control" placeholder="Utilizador" name="id_utilizador">
        
                                </div>

                                <label>Disciplina a  Lecionar</label>
                                            <select type="text" class="form-control"  name="disciplina">
                                                    <option>Matematica</option>
                                                    <option>Informatica</option>
                                                    <option>Geografia</option>
                                                    <option>Desenho</option>
                                                    <option>Eletricidade</option>
                                                  
                                            </select>
                               
                               
                               
                               





                           </fieldset>

                                <br>
                                </br>

                            <button type="submit" class="btn btn-primary float-right">Cadastrar Professor</button>

                      </form>
                           
                          
                </div>

        
        
        
      </div><!--/. container-fluid -->
    
    </section>
    <!-- /.content -->





          
  
    </main>
    

                @else

                <center>
                <div class="alert alert-danger" role="alert">
                  Você não tem permissão para efectuar alterações!
                </div>
                </center>

                @endcan
    
@endsection	