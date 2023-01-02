 @extends('layouts.app2')

@section('content')

                <div class="card">
                <div class="crad-header py-2">
                    <h3 class="card-title">

                    Editar Curso

                    </h3>
                 
                </div>    

                </div class="card-body">

                   <form action="/actualizar_curso/{{$curso->id}}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <label for="name">Nome</label>
                       <div class="form-group">

                      
                           <input type="text" name="nome" placeholder="DIGITE O NOME DO CURSO" required class="form-control" value="{{$curso->nome}}">
                        </div> 
                        <label for="category">Imagem</label>
                        <div class="form-group">
                    
                          <input type="file" name="imagem" id="imagem_curso">
                        </div>
                      
                      
                        <div class="form-group">
                          <label for="duration">Sigla </label>
                          <input type="text" name="sigla" id="duration" class="form-control" placeholder="Duracao do Curso" required value="{{$curso->sigla}}">
                        </div>
                        <label for="duration">Descrisao </label>
                        <div class="form-group"> 
                         <textarea name="descricao"  class="form-control">
                          {{$curso->descricao}}
                         </textarea>
                         
                        </div>
                      
                      
                      
                      
                     
                        <button type="submit" name="Enviar" class="btn btn-success">Atualizar</button>
                    </form>
                    
                
                </div>

         

 @endsection