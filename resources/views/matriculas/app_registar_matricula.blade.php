 @extends('layouts.app2')

@section('content')

@if($estudante == null)
<center>
    <div class="alert alert-danger" role="alert">
  O Nº de documento inserido não foi encontrado
</div>
</center>
@endif

 <div class="card-body">
  <form action="/registar_matricula/verificar" method="post">
                            @csrf

                            
                          
                               <h3>1-Verificar o Pré-Cadastro</h3>

                        

                      
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            
                                  <label>  Nº do Documento</label><input type="text" class="form-control" placeholder="Digite o numero do documento" name="n_documento">
                                        </div>
                                        <div class="col-md-6">
                                           <a href="/registar_matricula/{id}"> <button class="btn btn-primary">Verificar</button> </a>
                                        </div>
    
                                    </div>
    
        
                                </div>

                                </form>
                             <br>

@if($estudante && $estudante != 'vazio')
  
                            <h3>2-Dados da Matricula</h3>
<form action="/salvar_matricula" method="post">

    @csrf

                            <div class="row">
                                <div class="col-md-4">
                                <div class="form-group">
                            <label>Curso</label>
                             <select type="text" class="form-control"  name="curso_id">
                                @foreach($cursos as $item)
                                    <option value="{{$item->id}}">{{$item->nome}}</option>
                                @endforeach
                             
                             </select>
 
                             </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Turma</label>
 
                             <select type="text" class="form-control"  name="turma_id">
                                @foreach($turmas as $item)
                                    <option value="{{$item->id}}">{{$item->nome}}</option>
                                @endforeach
                             
                             </select>
 
                             </div>
                                </div>
                                <div class="col-md-4">
                                     
                             <div class="form-group">
                            
                            <label>Ano Lectivo</label>

                             <input type="text" class="form-control" name="ano_lectivo">
                           
                         </div>
                                </div>
                                </div>   



                                <div class="row">
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Aluno</label>
                                 <select type="text" class="form-control"  name="estudante_id">
                             
                                    <option selected value="{{$estudante->id}}">{{$estudante->nome}}  {{$estudante->sobrenome}}</option>
                             
                             
                             </select>
     
                             </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Sala</label>
                                 <input type="text" class="form-control" placeholder="N sala" name="sala">
     
                             </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="form-group">
                                <label>Classe</label>
                                <select type="text" class="form-control"  name="classe_id">
                                @foreach($classes as $item)
                                    <option value="{{$item->id}}">{{$item->titulo}}</option>
                                @endforeach
                             
                             </select>

                             </div>
                             

                             
                                    </div>
    

                            </div><br>
                            <div class="row">

                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary float-center">Matricular</button>
                                    </div>

    

                            </div>

                            </form>

@endif

                            </div>

                           
                
                           
                            
                            



                            
                     

                       

                            

                      
                           
 </div>
                       
                        
               

         

 @endsection