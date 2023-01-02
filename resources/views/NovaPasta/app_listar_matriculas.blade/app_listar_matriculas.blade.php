 @extends('layouts.app2')

@section('content')

  @can('show_role')
  <div class="card">
                <div class="card-header py-4">
                    <h3 >

                 Encontre registos rapidamente pelo Nº de Matricula: 
                 <br>
                 <br>
                  <div class="row">
                        <div class="col-md-6">
                      
                       <form>
                        <input type="text"   class="form-control" name="pesquisar" placeholder="Digite Aqui o número de matricula"></input>
                      
                      
                        </div>
                         <div class="col-md-6">
                            <button name="pesquisar" class="btn btn-primary btn-md"><i class="fa-solid fa-search"></i></button>
                        </div>
                        </form>
                  </div>
                
                    </h3>
                       
                </div>    
        <hr><br><br>
        <div class="card">
                <div class="card-header py-4">
                    <h3 class="card-title">

                   Alunos Matriculados

                    </h3>
                        @can('add_role')
                        <div class="card-tools">
                                <a href="/registar_matricula" class="btn btn-primary btn-md"><i class="fa fa-plus mr-2"></i>Matricular  Novo Aluno</a>                              
                        </div>
                        @endcan
                </div>    

                <div class="card-body">
                 <div class="table-responsive bg-white">

                        <table class="table table-bordered table-stripped table-hover">


                        <thead>
                                <tr>
                                    <th>Nº</th>
                                    <th>Nome Completo</th>
                                    <th>Curso</th>
                                    <th>Classe</th>
                                    <th>Turma</th>
                                    <th>Acções</th>
                   

                                   
                                </tr>

                        </thead>
                        <tbody>
                               
                                
                               @foreach($matriculas as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->aluno_id}}</td>
                                    <td>{{$item->curso_id}}</td>
                                    <td>{{$item->classe_id}}</td>
                                    <td>{{$item->turma_id}}</td>
                                
                        
                                    <td>
                                   <a href="/editar_matricula/{{$item->id}}"> <button class="btn btn-primary"><i class="fa-solid fa-edit"></i></button></a>
                                     <a href="/visualizar_matricula/{{$item->id}}"> <button class="btn btn-warning"><i class="fa-solid fa-eye"></i></button></a>
                                       <a href="/remover_matricula/{{$item->id}}"> <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>
                                 <a href=""> <button class="btn btn-info"><i class="fa fa-print"></i></button></a>
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