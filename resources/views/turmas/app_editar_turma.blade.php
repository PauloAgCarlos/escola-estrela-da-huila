 @extends('layouts.app2')

@section('content')



                <main id="main">


                        





     <!-- Main content -->
     <section class="content">
      <div class="container">

          

          

                <div class="card">
                <div class="crad-header py-2">
                    <h3 class="card-title   ">

                 Editar detalhes da turma

                    </h3>
            
                </div>    

                </div class="card-body">

                     <form action="/actualizar_turma/{{$turma->id}}" method="POST">
                      @csrf
                        <label for="name">Nome</label>
                       <div class="form-group">

                      
                           <input type="text"  class="form-control" name="nome" value="{{$turma->nome}}" placeholder="DIGITE O NOME DO CURSO" required class="form-control">
                        </div> 
                        <label for="category">Numero Maximo</label>
                        <div class="form-group">
                    
                          <input type="number"class="form-control" name="numeroMaximo" value="{{$turma->numeroMaximo}}" id="imagem_curso" required>
                        </div>
                      
                      
                        <div class="form-group">
                          <label for="duration">Numero Minimo</label>
                          <input type="number" name="numeroMinimo" value="{{$turma->numeroMinimo}}" id="duration" class="form-control" placeholder="Duracao do Curso" required>
                        </div>
                        <label for="duration">Periodo </label>
                        <div class="form-group">
                        <input type="text" name="periodo" value="{{$turma->periodo}}" id="duration" class="form-control" placeholder="Duracao do Curso" required>

                        </div>
                      
                      
                      
                      
                     
                        <button type="submit" class="btn btn-success">Atualizar</button>
                    </form>
                    
                
                </div>

      </div><!--/. container-fluid -->
    
    </section>
    <!-- /.content -->
                
                </main>
                    
@endsection