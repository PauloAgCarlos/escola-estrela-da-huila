@extends('layouts.app2')

@section('content')


               <div class="bg-white">
                    
                        <form action="/actualizar_professor/{{$professor->id}}" method="post">
                        	@csrf
                           <fieldset>
                               <legend>Informaçoes Pessoais</legend>

                            <div class="form-group">
                                    <label>Nome </label>
                                <input type="text" class="form-control" placeholder="Nome completo do funcionario " name="nome" value="{{$professor->nome}}">
    
                                </div>
                                 <div class="form-group">
                                 <label>Sobrenome</label>
    
                                <input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome" value="{{$professor->sobrenome}}">
    
                                </div>
                                <div class="form-group">
                                <label>Endereco </label>
                                    <input type="date" class="form-control" name="endereco" value="{{$professor->endereco}}">
    
                                </div>
                                <div class="form-group">
                                <label>Nº BI </label>
                                    <input type="text" class="form-control" placeholder="BI" name="numeroBilhete" value="{{$professor->numeroBilhete}}">
        
                                </div>
                                <div class="form-group">
                                <label>Genero </label><br>
                                    Masculino<input type="radio"  name="genero" value="{{$professor->genero}}">
                    
                                    Femenino  <input type="radio"  name="genero" value="{{$professor->genero}}">
        
                                </div>
                                <div class="form-group">
                                <label>Nascimento</label>
                                    <input type="date" class="form-control" placeholder="endereco" name="nascimento" value="{{$professor->nascimento}}">
        
                                </div>
                                <div class="form-group">
                                <label>Nacionalidade</label>
                                    <input type="text" class="form-control" placeholder="Sua Nacionalidade" name="nacionalidade" value="{{$professor->nacionalidade}}">
        
                                </div>
                                <div class="form-group">
                                <label>Telefone</label>
                                    <input type="text" class="form-control" placeholder="Telefone" name="telefonePrimario" value="{{$professor->telefonePrimario}}">
        
                                </div>
                                <div class="form-group">
                                <label>Telemovel</label>
                                    <input type="text" class="form-control" placeholder="Seu Telemovel" name="telefoneSecundario" value="{{$professor->telefoneSecundario}}">
        
                                </div>

                                <div class="form-group">
                                <label>Data do Cadastro</label>
                                    <input type="date" class="form-control"  name="data_cadastro" value="{{$professor->data_cadastro}}">
        
                                </div>
                                <div class="form-group">
                                <label>Email principal</label>
                                    <input type="email" class="form-control" placeholder="Selecione o municipio" name="email" value="{{$professor->email}}">
        
                                </div>
                                <div class="form-group">
                                <label>Email Secundario</label>
                                    <input type="email" class="form-control" placeholder="Utilizador" name="emailSecundario" value="{{$professor->emailSecundario}}">
        
                                </div>
                                <div class="form-group">
                                <label>Estdo civil</label>
                                    <select type="text" class="form-control"  name="estadoCivil" value="{{$professor->estadoCivil}}">
                                            <option>Solteiro</option>
                                            <option>Casado</option>
                                    </select>
        
                                </div>
                                <div class="form-group">
                                <label>Habilitaçao</label>
                                    <select type="text" class="form-control"  name="habilitacao" value="{{$professor->habilitacao}}">
                                            <option>Bacharel</option>
                                            <option>Licenciado</option>
                                            <option>Tecnico Medio</option>
                                    </select>
        
                                </div>
                                <div class="form-group">
                                <label>Numero Agente </label>
                                    <input type="number" class="form-control" placeholder="Utilizador" name="numeroAgente" value="{{$professor->numeroAgente}}">
        
                                </div>

                               
                                <div class="form-group">

                              
                                        <label>Municipio</label>
                                            <select type="text" class="form-control"  name="municipio" value="{{$professor->municipio}}">
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
                                    <input type="text" class="form-control" placeholder="Utilizador" name="id_utilizador" value="{{$professor->id_utilizador}}">
        
                                </div>

                                <label>Disciplina a  Lecionar</label>
                                            <select type="text" class="form-control"  name="disciplina" value="{{$professor->disciplina}}">
                                                    <option>Matematica</option>
                                                    <option>Informatica</option>
                                                    <option>Geografia</option>
                                                    <option>Desenho</option>
                                                    <option>Eletricidade</option>
                                                  
                                            </select>
                               
                               
                               
                               





                           </fieldset>

                                <br>
                                </br>

                            <button type="submit" class="btn btn-primary float-right">Atualizar Professor</button>
                      </form>
                          
                </div>
        
      </div><!--/. container-fluid -->
    
    </section>
    <!-- /.content -->





          
  
    </main>
    

    
@endsection	