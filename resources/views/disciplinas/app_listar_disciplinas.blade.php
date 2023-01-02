 @extends('layouts.app2')

@section('content')

    @can('show_role')

         
                <div class="row">
                    
                <div  class="col-lg-12"> 
                            

            <div class="card">
                <div class="card-header py-4">
                    <h3 class="card-title">

                Todas As Disciplinas Cadastradas

                    </h3>
                    @can('add_role')
                        <div class="card-tools">
                                <a href="/registar_disciplina" class="btn btn-primary btn-sm"><i class="fa fa-plus mr-2"></i>Adicionar Nova Discipina</a>
                        </div>
                    @endcan
                        
                </div>    

                </div class="card-body">
                 <div class="table-responsive bg-white">

                        <table class="table table-bordered table-stripped table-hover">


                        <thead>
                                <tr>
                                    <th>Nº</th>
                                    <th>Nome da Disciplina</th>
                                    
                                    <th>Sigla</th>
                                    <th>Curso</th>
                                    <th>Acções</th>
                                 
                                </tr>

                               

                        </thead>
                        <tbody>
                                

                               @foreach($disciplinas as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->nome}}</td>
                                    <td>{{$item->sigla}}</td>
                                    <td>{{$item->curso_id}}</td>
                                    <td>
                                   <a href="/editar_disciplina/{{$item->id}}"> <button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                                     <a href="/visualizar_disciplina/{{$item->id}}"> <button class="btn btn-info"><i class="fa fa-eye"></i></button></a>
                                       <a href="/remover_disciplina/{{$item->id}}"> <button class="btn btn-warning"><i class="fa fa-trash"></i></button></a>

                                    </td>
                                </tr>
                            @endforeach

                          
                        </tbody>



                    </table>
                       <div>
                </div>
            </div>
                    </div>
       
                </div>


                @else

                <center>
                <div class="alert alert-danger" role="alert">
                  Você não tem permissão pra visualizar essa página!
                </div>
                </center>

                @endcan
          

 @endsection



