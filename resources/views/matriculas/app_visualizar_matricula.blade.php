 @extends('layouts.app2')

@section('content')

                 
 
                        <form action="/actualizar_matricula/{{$matricula->id}}" method="post">
                            @csrf
                           <fieldset>
                               <legend>Informaçoes Pessoais</legend>

                            <div class="form-group">

                                <input type="text" class="form-control" placeholder="Nome " name="nome" value="{{$aluno->nome}}" readonly>
    
                                </div>
                                 <div class="form-group">
    
                                <input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome" value="{{$aluno->sobrenome}}" readonly>
    
                                </div>
                                <div class="form-group">
    
                                    <input type="date" class="form-control" name="nascimento" value="{{$aluno->nascimento}}" readonly>
    
                                </div>
                                <div class="form-group">
    
                                    <input type="text" class="form-control" placeholder="Nome Completo do Pai" name="pai" value="{{$aluno->pai}}" readonly>
        
                                </div>
                                <div class="form-group">
    
                                    <input type="text" class="form-control" placeholder="Nome Completo da Mae" name="mae" value="{{$aluno->mae}}" readonly>
        
                                </div>
                                <div class="form-group">
    
                                    <input type="text" class="form-control" placeholder="endereco" name="endereco" value="{{$aluno->endereco}}" readonly>
        
                                </div>
                                <div class="form-group">
    
                                    <input type="text" class="form-control" placeholder="Telefone Primario" name="telef_primario" value="{{$aluno->telef_primario}}" readonly>
        
                                </div>
                                <div class="form-group">
    
                                    <input type="text" class="form-control" placeholder="TelefoneAlternativo" name="telef_secundario" value="{{$aluno->telef_secundario}}" readonly>
        
                                </div>
                                <div class="form-group">
    
                                    <input type="email" class="form-control" placeholder="Seu Email" name="email" value="{{$aluno->email}}" readonly>
        
                                </div>

                                <div class="form-group">
    
                                    <input type="text" class="form-control" placeholder="Numero do Documento" name="n_documento" value="{{$aluno->n_documento}}" readonly>
        
                                </div>
                                <div class="form-group">
    
                                    <input type="text" class="form-control" placeholder="Selecione o municipio" name="id_municipio" value="{{$aluno->id_municipio}}" readonly>
        
                                </div>
                                <div class="form-group">
    
                                    <input type="text" class="form-control" placeholder="Utilizador" name="id_utilizador" value="{{$aluno->id_utilizador}}" readonly>
        
                                </div>




                           </fieldset>

                           <fieldset>
                            <legend>Dados da Matricula</legend>

                         <div class="form-group">
                            <label>Curso</label>
                             <select type="text" class="form-control"  name="curso_id" disabled>
                       

                                @foreach($cursos as $item)
                               
                                    <option value="{{ $item->id }}" {{$matricula->curso_id == $item->id  ? 'selected' : ''}}>{{ $item->nome}}</option>
                                @endforeach
                             
                             </select>
 
                             </div>
                              <div class="form-group">
                                <label>Turma</label>
 
                             <select type="text" class="form-control"  name="turma_id" disabled>
                          
                                @foreach($turmas as $item)
                               
                                    <option value="{{ $item->id }}" {{$matricula->turma_id == $item->id  ? 'selected' : ''}}>{{ $item->nome}}</option>
                                @endforeach
                             
                             </select>
 
                             </div>
                         <!--     <div class="form-group">
                                <label>Ano Lectivo</label>
 
                                 <input type="text" class="form-control" name="ano_lectivo">
 
                             </div> -->
                             <div class="form-group">
                                <label>Aluno</label>
                                 <select type="text" class="form-control"  name="estudante_id" disabled>
                              
                                @foreach($estudantes as $item)
                               
                                    <option value="{{ $item->id }}" {{$matricula->estudante_id == $item->id  ? 'selected' : ''}}>{{ $item->nome}}</option>
                                @endforeach
                             
                             </select>
     
                             </div>
                             <div class="form-group">
                                <label>Sala</label>
                                 <input type="text" class="form-control" placeholder="N sala" name="sala" disabled>
     
                             </div>
                             <div class="form-group">
                                <label>Classe</label>
                                <select type="text" class="form-control"  name="classe_id" disabled>
                                @foreach($classes as $item)
                                    <option value="{{$item->id}}">{{$item->titulo}}</option>
                                @endforeach
                             
                             </select>
     
                             </div>
                             <div class="form-group">
                                <label>Data Matricula</label>
                                 <input type="text" class="form-control" name="data_matricula" value="{{$item->created_at}}" disabled>
     
                             </div>
                             <div class="form-group">
                                <label>Funcionario</label>
                                 <select type="text" class="form-control"  name="funcionario_id" disabled>
                                @foreach($funcionarios as $item)
                                    <option value="{{$item->id}}">{{$item->nome}}</option>
                                @endforeach
                             
                             </select>
     
                             </div>
                             <div class="form-group">
                                <label>Utilizador</label>
                                 <select type="text" class="form-control"  name="user_id" disabled>
                                @foreach($usuarios as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                             
                             </select>
     
                             </div>

                           




                        </fieldset>

                   

                      </form>
                           
                        
                </div>

         

 @endsection