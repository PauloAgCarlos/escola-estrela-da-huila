@extends('layouts.app2')

@section('content')
 
 
           

               <div class="bg-white">
                  
                        <form action="/actualizar_funcionario/{{$funcionario->id}}" method="post">
                            @csrf
                           <fieldset>
                               <legend>Informaçoes Pessoais</legend>

                            <div class="form-group">
                                    <label>Nome </label>
                                <input type="text" class="form-control" placeholder="Nome completo do funcionario " name="nome" value="{{$funcionario->nome}}" readonly>
    
                                </div>
                                 <div class="form-group">
                                 <label>Sobrenome</label>
    
                                <input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome" value="{{$funcionario->sobrenome}}" readonly>
    
                                </div>
                                <div class="form-group">
                                <label>Endereco </label>
                                    <input type="date" class="form-control" name="endereco" value="{{$funcionario->endereco}}" readonly>
    
                                </div>
                                <div class="form-group">
                                <label>Nº BI </label>
                                    <input type="text" class="form-control" placeholder="BI" name="numeroBilhete" value="{{$funcionario->numeroBilhete}}" readonly>
        
                                </div>
                                <div class="form-group">
                                <label>Genero </label><br>
                                    Masculino: <input type="radio" name="genero" readonly>
                            
                                </div>
                                <div class="form-group">
                                <label>Nascimento</label>
                                    <input type="date" class="form-control" placeholder="endereco" name="dataNascimento" value="{{$funcionario->dataNascimento}}" readonly>
        
                                </div>
                                <div class="form-group">
                                <label>Nacionalidade</label>
                                    <input type="text" class="form-control" placeholder="Sua Nacionalidade" name="nacionalidade" value="{{$funcionario->nacionalidade}}" readonly>
        
                                </div>
                                <div class="form-group">
                                <label>Telefone</label>
                                    <input type="text" class="form-control" placeholder="Telefone" name="telefone" value="{{$funcionario->telefone}}" readonly>
        
                                </div>
                                <div class="form-group">
                                <label>Telemovel</label>
                                    <input type="text" class="form-control" placeholder="Seu Telemovel" name="telemovel" value="{{$funcionario->telemovel}}" readonly>
        
                                </div>

                                <div class="form-group">
                                <label>Data do Cadastro</label>
                                    <input type="date" class="form-control"  name="data_cadastro" value="{{$funcionario->data_cadastro}}" readonly>
        
                                </div>
                                <div class="form-group">
                                <label>Email principal</label>
                                    <input type="email" class="form-control" placeholder="Selecione o municipio" name="emailPrincipal" value="{{$funcionario->emailPrincipal}}" readonly>
        
                                </div>
                                <div class="form-group">
                                <label>Email Secundario</label>
                                    <input type="email" class="form-control" placeholder="Utilizador" name="emailSecundario" value="{{$funcionario->emailSecundario}}" readonly>
        
                                </div>
                                <div class="form-group">
                                <label>Estdo civil</label>
                                    <select type="text" class="form-control"  name="estadoCivil" value="{{$funcionario->estadoCivil}}" readonly>
                                            <option>Solteiro</option>
                                            <option>Casado</option>
                                    </select>
        
                                </div>
                                <div class="form-group">
                                <label>Habilitaçao</label>
                                    <select type="text" class="form-control"  name="habilitacao" value="{{$funcionario->habilitacao}}" readonly>
                                            <option>Bacharel</option>
                                            <option>Licenciado</option>
                                            <option>Tecnico Medio</option>
                                    </select>
        
                                </div>
                                <div class="form-group">
                                <label>Numero Agente </label>
                                    <input type="numero" class="form-control" placeholder="Utilizador" name="numeroAgente" value="{{$funcionario->numeroAgente}}" readonly>
        
                                </div>
                                <div class="form-group">

                              
                                        <label>Municipio</label>
                                            <select type="text" class="form-control"  name="municipio" value="{{$funcionario->municipio}}" readonly>
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
                                    <input type="text" class="form-control" placeholder="Utilizador" name="utilizador" value="{{$funcionario->utilizador}}" readonly>
        
                                </div>


                           </fieldset>

                                <br>
                                </br>
 

                      </form>
                           
                         
                </div>

            

@endsection