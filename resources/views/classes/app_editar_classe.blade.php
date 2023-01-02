@extends('layouts.app2')

@section('content')

<div class="content-wrapper">

  

     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">

            
      <div class="col-lg-8">
                <div class="card">
                <div class="card-header py-2">
                    <h3 class="card-title ">

                    Editar Detalhes da Classe

                    </h3>
                 
                </div>    

                </div class="card-body">

            
                    <form action="/actualizar_classe/{{$classe->id}}" method="POST">
                    	@csrf
                        <label for="title">Titulo</label>
                       <div class="form-group">

                      
                           <input type="text" name="titulo" placeholder="Digite nome da Classe"  class="form-control" value="titulo">
                        </div> 

                      
                        </div> 
                        <br>

                        <button type="submit" name="Enviar" class="btn btn-success">Atualizar</button>
                    </form>
                    
                    </div>
                   
                </div>
</div>

                  
                
             

         
            
        
       

          
                
           
      </div><!--/. container-fluid -->
    
    </section>
    <!-- /.content -->

    </div>

 @endsection