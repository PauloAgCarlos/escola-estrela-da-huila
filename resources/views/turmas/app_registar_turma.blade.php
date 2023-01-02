 @extends('layouts.app2')

@section('content')



                <main id="main">

                  <!-- Main content -->
     <section class="content">
      <div class="container-fluid">

      

             <div class="row">

               <div class='col-lg-8'>
          
                

            <div class="card">
                <div class="card-header py-2">
                    <h3 class="card-title">
                   Todas as Turmas Cadastradas
                    </h3>
                        <div class="card-tools">
                            
                        </div>
                </div>    

                </div class="card-body">
                 <div class="table-responsive bg-white">

                        <table class="table table-bordered">


                        <thead>
                                <tr>
                                    <th>Nº</th>
                                    <th>Nome</th>
                                    <th>Numero Max</th>
                                    <th>Numero Min</th>
                                    <th>Periodo</th>
                                </tr>

                        </thead>

                        <tbody>
                                

                                @foreach($turmas as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->nome}}</td>
                                    <td>{{$item->numeroMaximo}}</td>
                                    <td>{{$item->numeroMinimo}}</td>
                                    <td>{{$item->periodo}}</td>
                                    <td>
                                    <button class="btn btn-primary">Editar<button><button class="btn btn-info">Ver<button><button class="btn btn-warning">Deletar
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

                    Adicionar Turma

                    </h3>
                 
                </div>    

                <div class="card-body">

                    <form action="/salvar_turma" method="POST">
                    	@csrf
                       
                  
                                    <div class="form-group">
                                      <label>Nome </label>

                                      <input type="text" class="form-control" name="nome">

                                    </div>
                                    <div class="form-group">
                                      <label>Numero maximo </label>

                                      <input type="number" name="numeroMaximo" class="form-control">

                                    </div>
                                    <div class="form-group">
                                      <label>Numero minimo </label>

                                      <input type="number" name="numeroMinimo" class="form-control">

                                    </div>
                                    <div class="form-group">
                                      <label>Periodo </label>

                                      <select type="text" name="periodo" class="form-control">

                                          <option>Manha</option>
                                          <option>Tarde</option>
                                          <option>Noite</option>

                                      </select>

                                    </div>
                     
                            <br>
                            <br>
                        
                        <button type="submit" name="submit" class="btn btn-primary float-right form-control">Enviar</button>

                    </form>
                    
                
                </div>

               </div>

            </div>
     
      </div><!--/. container-fluid -->
    
    </section>
    <!-- /.content -->


                </main>
                    
@endsection