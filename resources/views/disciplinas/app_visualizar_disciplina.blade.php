 @extends('layouts.app2')

@section('content')

       


                <div class="card">
                <div class="crad-header py-4">
                    <h3 class="card-title   ">

                   Ver detalhes Da Disciplina

                    </h3>
                 
                </div>    

                </div class="card-body">

                    <form action="/actualizar_disciplina/{{$disciplina->id}}" method="POST" enctype="multipart/form-data">
                      @csrf

                        <label for="name">Nome</label>
                       <div class="form-group">

                      
                           <input type="text" name="nome" readonly value="{{$disciplina->nome}}" placeholder="DIGITE O NOME DO CURSO" required class="form-control">
                        </div> 
                      
                      
                        <div class="form-group">
                          <label for="duration">Sigla </label>
                          <input type="text" name="sigla" readonly value="{{$disciplina->sigla}}" id="duration" class="form-control" placeholder="Duracao do Curso" required>
                        </div>
                        <div class="form-group">
                          <label for="duration">Professor a Lecionar </label>
                          <input type="text" name="prof" readonly value="{{$disciplina->prof}}" id="duration" class="form-control" placeholder="Professor" required>
                        </div>
                        <div class="form-group">
                          <label for="duration">Curso</label>
                          <select class="form-control" name="curso_id" readonly value="{{$disciplina->curso_id}}">
                            @foreach($cursos as $item)
                            <option value="{{ $item->id }}">{{ $item->nome }}</option>
                            @endforeach
                          </select>
                        </div>
                        <label for="duration">Descrisao </label>
                        <div class="form-group">
                         <textarea name="descricao" readonly class="form-control" readonly>
                          {{$disciplina->descricao}}
                         </textarea>
                         
                        </div>
                      
        
                    </form>
                    
                
                </div>

          
          

 @endsection