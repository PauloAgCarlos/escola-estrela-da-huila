 @extends('layouts.app2')

@section('content')

    

        <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Alunos Cadastrados</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


     <!-- Main content -->
     <section class="content">
      <div class="container">
 


               <div class="bg-white">
                    
                        <form method="post" action="/actualizar_estudante/{{$estudante->id}}">

                        	@csrf

                           <fieldset>
                               <legend>Informaçoes Pessoais</legend>

                            <div class="form-group">
                                    <label>Nome </label>
                                <input type="text" class="form-control" placeholder="Nome completo do funcionario " name="nome" value="{{$estudante->nome}}">
    
                                </div>
                                 <div class="form-group">
                                 <label>Sobrenome</label>
    
                                <input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome" value="{{$estudante->sobrenome}}">
    
                                </div>
                                <div class="form-group">
                                <label>Nascimento </label>
                                    <input type="date" class="form-control" name="nascimento" value="{{$estudante->nascimento}}">
    
                                </div>

                                <div class="form-group">
                                 <label>Pai</label>
    
                                <input type="text" class="form-control" placeholder="Nome do Pai" name="pai" value="{{$estudante->pai}}">
    
                                </div>
                                <div class="form-group">
                                <label>Mae </label>
                                    <input type="text" class="form-control" placeholder="Nome da mae" name="mae" value="{{$estudante->mae}}">
    
                                </div>
                                <div class="form-group">
                                 <label>endereco</label>
    
                                <input type="text" class="form-control" placeholder="Seu endereco" name="endereco" value="{{$estudante->endereco}}">
    
                                </div>
                                <div class="form-group">
                                <label>Telefone primario</label>
                                    <input type="text" class="form-control" placeholder="Telefone" name="telefonePrimario" value="{{$estudante->telefonePrimario}}">
    
                                </div>

                                <div class="form-group">
                                 <label>Telefone Secundario</label>
    
                                <input type="text" class="form-control" placeholder="Nome do Pai" name="telefoneSecundario" value="{{$estudante->telefoneSecundario}}">
    
                                </div>
                                <div class="form-group">
                                <label>Email</label>
                                    <input type="text" class="form-control" placeholder="Nome da mae" name="email" value="{{$estudante->email}}">
    
                                </div>
                                <div class="form-group">
                                <label>Palavra Passe</label>
                                    <input type="text" class="form-control" placeholder="Nome da mae" name="palavrapasse" value="{{$estudante->palavrapasse}}">
    
                                </div>
                                <div class="form-group">
                                <label>Nº Documento</label>
                                    <input type="text" class="form-control" placeholder="Nome da mae" name="numeroDocumento" value="{{$estudante->numeroDocumento}}">
    
                                </div>
                                <div class="form-group">
                                <label>Municipio</label>
                                    <input type="text" class="form-control" placeholder="Nome da mae" name="municipio" value="{{$estudante->municipio}}">
    
                                </div>

                                <div class="form-group">
                                <label>Utilizador</label>
                                    <input type="text" class="form-control" placeholder="Nome da mae" name="id_utilizador" value="{{$estudante->id_utilizador}}">
    
                                </div>



                               
                                
                                


                           </fieldset>

                                <br>
                                </br>

                            <button type="submit" class="btn btn-primary float-right">Atualizar Aluno</button>

                      </form>
                           
                         
                </div>
 
      </div><!--/. container-fluid -->
    
    </section>
    <!-- /.content -->






  
                
                </div>

         

 @endsection