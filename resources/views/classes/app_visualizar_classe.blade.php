@extends('layouts.app2')

@section('content')

<div class="content-wrapper">

     

     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">

            

                <div class="card">
                <div class="card-header py-2">
                    <h3 class="card-title ">

                    Visualizar Detalhes da Classe

                    </h3>
                 
                </div>    

                </div class="card-body">

                    <form action="/actualizar_classe/{{$classe->id}}" method="POST">
                    	@csrf
                        <label for="title">Titulo</label>
                       <div class="form-group">

                      
                           <input type="text" name="titulo" placeholder="Titulo" required class="form-control" value="{{$classe->titulo}}" readonly>
                        </div> 

                    

                     
                    </form>
                    
                
                </div>

         
            
        
       

          
                
           
      </div><!--/. container-fluid -->
    
    </section>
    <!-- /.content -->

    </div>

 @endsection