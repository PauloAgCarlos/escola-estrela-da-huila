 @extends('layouts.app2')

@section('content')

       


                <div class="card">
                <div class="crad-header py-2">
                    <h3 class="card-title   ">

                    Editar Discplina

                    </h3>
                 
                </div>    

                </div class="card-body">

                    <form action="/actualizar_disciplina/{{$disciplina->id}}" method="POST" enctype="multipart/form-data">
                      @csrf

                        <label for="name">Nome</label>
                       <div class="form-group">

                      
                           <input type="text" name="nome" value="{{$disciplina->nome}}" placeholder="DIGITE O NOME DO CURSO" required class="form-control">
                        </div> 
                      
                      
                        <div class="form-group">
                          <label for="duration">Sigla </label>
                          <input type="text" name="sigla" value="{{$disciplina->sigla}}" id="duration" class="form-control" placeholder="Duracao do Curso" required>
                        </div>
                        <div class="form-group">
                          <label for="duration">Professor a Lecionar </label>
                          <input type="text" name="prof" value="{{$disciplina->prof}}" id="duration" class="form-control" placeholder="Duracao do Curso" required>
                        </div>
                        <div class="form-group">
                          <label for="duration">Curso</label>
                          <select class="form-control" name="curso_id" value="{{$disciplina->curso_id}}">
                            @foreach($cursos as $item)
                            <option value="{{ $item->id }}">{{ $item->nome }}</option>
                            @endforeach
                          </select>
                        </div>
                        <label for="duration">Descrisao </label>
                        <div class="form-group">
                         <textarea name="descricao" class="form-control">
                          {{$disciplina->descricao}}
                         </textarea>
                         
                        </div>
                      
                      
                      
                      
                     
                        <button type="submit" name="Enviar" value="{{$disciplina->Enviar}}" class="btn btn-success">Atualizar</button>
                    </form>
                    
                
                </div>

          
          

 @endsection