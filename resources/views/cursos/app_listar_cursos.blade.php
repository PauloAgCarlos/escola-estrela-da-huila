 @extends('layouts.app2')

@section('content')

  
@can('show_role')
       

            <div class="card">
                <div class="crad-header py-4">
                    <h3 class="card-title">

                 Cursos Cadastrados

                    </h3>


                    


                        @can('add_role')
                        <div class="card-tools">
                                <a href="/registar_curso" class="btn btn-info btn-sm"><i class="fa fa-plus mr-4"></i>Adicionar Novo Curso</a>
                        </div>
                        @endcan

                        
                </div>    

                </div class="card-body">
                 <div class="table-responsive bg-white">

                        <table class="table table-bordered table-stripped table-hover">


                        <thead>
                                <tr>
                                    <th>Nº</th>
                                    <th>Nome</th>

                                    <th>Sigla</th>
                                    <th>Descrisao</th>
                                    <th>Acoes</th>
                                 
                                </tr>

                        </thead>
                        <tbody>
                               
                                @foreach($cursos as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->nome}}</td>
                                    <td>{{$item->sigla}}</td>
                                    <td>{{$item->descricao}}</td>
                                    <td>
                                   <a href="/editar_curso/{{$item->id}}"> <button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>

                                     <a href="/visualizar_curso/{{$item->id}}"> <button class="btn btn-info"><i class="fa fa-eye"></i></button></a>

                                       <a href="/remover_curso/{{$item->id}}"> <button class="btn btn-warning"><i class="fa fa-trash"></i></button></a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>



                    </table>
                       <div>
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