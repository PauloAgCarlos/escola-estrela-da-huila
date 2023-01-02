@extends('layouts.app2')

@section('content')


@can('show_role')

                <main id="main">

                  <!-- Main content -->
     <section class="content">
      <div class="container-fluid">

      

             <div class="row">

               <div class='col-lg-8'>
          
                

            <div class="card">
                <div class="card-header py-2">
                    <h3 class="card-title">
                   Todas as Classes Cadastradas
                    </h3>
                        <div class="card-tools">
                            
                        </div>
                </div>    

                </div class="card-body">
                 <div class="table-responsive bg-white">

                        <table class="table table-bordered table-stripped table-hover">


                        <thead>
                                <tr>
                                    <th>Nº</th>
                                    <th>Nome</th>
            
                                   
                                    <th>Açoes</th>

                                </tr>

                        </thead>

                        <tbody>
                                

                                @foreach($classes as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->titulo}}</td>
                                   
                                    <td>
                                    <a href="/editar_classe/{{$item->id}}"> <button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                                    <a href="/visualizar_classe/{{$item->id}}"> <button class="btn btn-primary"><i class="fa fa-eye"></i></button></a>
                                    <a href="/remover_classe/{{$item->id}}"> <button class="btn btn-warning"><i class="fa fa-trash"></i></button></a>
                                    </td>   
                               
                                </tr>
                            @endforeach

                        </tbody>


                    </table>
                       <div>
                </div>
            </div>
               </div>

               <div class="col-lg-4">
               <div class="card">
                <div class="card-header py-2">
                    <h3 class="card-title">

                    Adicionar classe

                    </h3>
                 
                </div>    

                <div class="card-body">

                <form action="/salvar_classe" method="POST">
                    	@csrf
                        <label for="title">Nome</label>
                       <div class="form-group">

                      
                           <input type="text" name="titulo" placeholder="Titulo" required class="form-control">
                        </div> 
                    <br>
                       @can('add_role')
                        <button type="submit" name="Enviar" class="btn btn-primary">Adicionar</button>
                        @endcan

                        
                    </form>
                    
                    
                
                </div>

               </div>

            </div>
     
      </div><!--/. container-fluid -->
    
    </section>
    <!-- /.content -->


                </main>


@else

<center>
<div class="alert alert-danger" role="alert">
  Você não tem permissão pra visualizar essa página!
</div>
</center>

@endcan
                    
@endsection