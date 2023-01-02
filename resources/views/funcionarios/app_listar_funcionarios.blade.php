 @extends('layouts.app2')

@section('content')

     @can('show_role')

            <div class="card">
                <div class="card-header py-4">
                    <h3 class="card-title">

             Todos os funcionarios cadastrados

                    </h3>
                    @can('add_role')
                        <div class="card-tools">
                                <a href="/registar_funcionario" class="btn btn-success btn-sm"><i class="fa fa-plus mr-2"></i>Adicionar Novo</a>
                        </div>
                    @endcan
                        
                </div>    

                </div class="card-body">
                 <div class="table-responsive bg-white">

                        <table class="table table-bordered table-stripped table-hover ">


                        <thead>
                                <tr>
                                    <th>Nº</th>
                                    <th>Nome do funcionario</th>
                                    <th>Numero de Agente</th>
                                    <th>Contato</th>
                                    <th>Municipio</th>
                                    <th>Açoes</th>
                                </tr>

                        </thead>

                        <tbody>

                           

                                      @foreach($funcionarios as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->nome}}</td>
                                    <td>{{$item->numeroAgente}}</td>
                                    <td>{{$item->telefone}}</td>
                                    <td>{{$item->municipio}}</td>
                                    <td>
                                   <a href="/editar_funcionario/{{$item->id}}"> <button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                                     <a href="/visualizar_funcionario/{{$item->id}}"> <button class="btn btn-info"><i class="fa fa-eye"></i></button></a>
                                       <a href="/remover_funcionario/{{$item->id}}"> <button class="btn btn-warning"><i class="fa fa-trash"></i></button></a>
                              
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