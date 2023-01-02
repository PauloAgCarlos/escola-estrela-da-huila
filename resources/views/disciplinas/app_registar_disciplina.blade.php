 @extends('layouts.app2')

@section('content')

<div class='col-lg-8'>
  
<div class="card">
                <div class="crad-header py-4">
                    <h3 class="card-title   ">

                    Adicionar Nova Discplina

                    </h3>
                 
                </div>    

                </div class="card-body">

                    <form action="/salvar_disciplina" method="POST" enctype="multipart/form-data">
                      @csrf

                        <label for="name">Nome</label>
                       <div class="form-group">

                      
                           <input type="text" name="nome" placeholder="Digite o nome da disciplina" required class="form-control">
                        </div> 
                      
                      
                        <div class="form-group">
                          <label for="duration">Sigla </label>
                          <input type="text" name="sigla" id="duration" class="form-control" placeholder="Sigla da disciplina" required>
                        </div>
                        <div class="form-group">
                       
                          <label for="duration">Professor a Lecionar </label>
                          
                          <input type="text" name="prof" id="duration" class="form-control" placeholder="Selecione o Professor" required>
                      
                        </div>
                        <div class="form-group">
                          <label for="duration">Curso</label>
                          <select class="form-control" name="curso_id">
                            @foreach($cursos as $item)
                            <option value="{{ $item->id }}">{{ $item->nome }}</option>
                        
                           
                            @endforeach
                            <option value="">Todos os Cursos</option>
                          </select>
                        </div>
                        <label for="duration">Descrisao </label>
                        <div class="form-group">
                         <textarea name="descricao"  class="form-control">
                         </textarea>
                         
                        </div>
                      
                      
                      
                      
                     
                        <button type="submit" name="Enviar" class="btn btn-primary">Cadastrar</button>
                    </form>
                    
                
                </div>


</div>

  
          
          

 @endsection