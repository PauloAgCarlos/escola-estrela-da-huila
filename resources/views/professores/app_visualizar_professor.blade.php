@extends('layouts.app2')

@section('content')


               <div class="bg-white">
                    
                        <form action="/actualizar_professor/{{$professor->id}}" method="post">
                        	@csrf
                           <fieldset>
                               <legend>Informaçoes Pessoais</legend>

                            <div class="form-group">
                                    <label>Nome </label>
                                <input type="text" class="form-control" placeholder="Nome completo do funcionario " name="nome" readonly value="{{$professor->nome}}">
    
                                </div>
                                 <div class="form-group">
                                 <label>Sobrenome</label>
    
                                <input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome" readonly value="{{$professor->sobrenome}}">
    
                                </div>
                                <div class="form-group">
                                <label>Endereco </label>
                                    <input type="date" class="form-control" name="endereco" readonly value="{{$professor->endereco}}">
    
                                </div>
                                <div class="form-group">
                                <label>Nº BI </label>
                                    <input type="text" class="form-control" placeholder="BI" name="numeroBilhete" readonly value="{{$professor->numeroBilhete}}">
        
                                </div>
                                <div class="form-group">
                                <label>Genero </label><br>
                                    Masculino<input type="radio"  name="genero" readonly value="{{$professor->genero}}">
                    
                                    Femenino  <input type="radio"  name="genero" readonly value="{{$professor->genero}}">
        
                                </div>
                                <div class="form-group">
                                <label>Nascimento</label>
                                    <input type="date" class="form-control" placeholder="endereco" name="nascimento" readonly value="{{$professor->nascimento}}">
        
                                </div>
                                <div class="form-group">
                                <label>Nacionalidade</label>
                                    <input type="text" class="form-control" placeholder="Sua Nacionalidade" name="nacionalidade" readonly value="{{$professor->nacionalidade}}">
        
                                </div>
                                <div class="form-group">
                                <label>Telefone</label>
                                    <input type="text" class="form-control" placeholder="Telefone" name="telefonePrimario" readonly value="{{$professor->telefonePrimario}}">
        
                                </div>
                                <div class="form-group">
                                <label>Telemovel</label>
                                    <input type="text" class="form-control" placeholder="Seu Telemovel" name="telefoneSecundario" readonly value="{{$professor->telefoneSecundario}}">
        
                                </div>

                                <div class="form-group">
                                <label>Data do Cadastro</label>
                                    <input type="date" class="form-control"  name="data_cadastro" readonly value="{{$professor->data_cadastro}}">
        
                                </div>
                                <div class="form-group">
                                <label>Email principal</label>
                                    <input type="email" class="form-control" placeholder="Selecione o municipio" name="email" readonly value="{{$professor->email}}">
        
                                </div>
                                <div class="form-group">
                                <label>Email Secundario</label>
                                    <input type="email" class="form-control" placeholder="Utilizador" name="emailSecundario" readonly value="{{$professor->emailSecundario}}">
        
                                </div>
                                <div class="form-group">
                                <label>Estdo civil</label>
                                    <select type="text" class="form-control"  name="estadoCivil" readonly value="{{$professor->estadoCivil}}">
                                            <option>Solteiro</option>
                                            <option>Casado</option>
                                    </select>
        
                                </div>
                                <div class="form-group">
                                <label>Habilitaçao</label>
                                    <select type="text" class="form-control"  name="habilitacao" readonly value="{{$professor->habilitacao}}">
                                            <option>Bacharel</option>
                                            <option>Licenciado</option>
                                            <option>Tecnico Medio</option>
                                    </select>
        
                                </div>
                                <div class="form-group">
                                <label>Numero Agente </label>
                                    <input type="number" class="form-control" placeholder="Utilizador" name="numeroAgente" readonly value="{{$professor->numeroAgente}}">
        
                                </div>

                               
                                <div class="form-group">

                              
                                        <label>Municipio</label>
                                            <select type="text" class="form-control"  name="municipio" readonly value="{{$professor->municipio}}">
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
                                    <input type="text" class="form-control" placeholder="Utilizador" name="id_utilizador" readonly value="{{$professor->id_utilizador}}">
        
                                </div>

                                <label>Disciplina a  Lecionar</label>
                                            <select type="text" class="form-control"  name="disciplina" readonly value="{{$professor->disciplina}}">
                                                    <option>Matematica</option>
                                                    <option>Informatica</option>
                                                    <option>Geografia</option>
                                                    <option>Desenho</option>
                                                    <option>Eletricidade</option>
                                                  
                                            </select>
                               
                               
                               
                               





                           </fieldset>

                                <br>
                                </br>

                         
                      </form>
                          
                </div>
        
      </div><!--/. container-fluid -->
    
    </section>
    <!-- /.content -->





          
  
    </main>
    

    
@endsection	