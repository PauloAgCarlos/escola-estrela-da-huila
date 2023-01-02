 @extends('layouts.app2')

@section('content')

                <div class="card">
                <div class="crad-header py-2">
                    <h3 class="card-title">

                    Adicionar Novo Curso

                    </h3>
                 
                </div>    

                </div class="card-body">

                   <form action="/salvar_curso" method="POST" enctype="multipart/form-data">
                      @csrf
                        <label for="name">Nome</label>
                       <div class="form-group">

                      
                           <input type="text" name="nome" placeholder="DIGITE O NOME DO CURSO" required class="form-control">
                        </div> 
                        <label for="category">Imagem</label>
                        <div class="form-group">
                    
                          <input type="file" name="imagem" id="imagem_curso" required>
                        </div>
                      
                      
                        <div class="form-group">
                          <label for="duration">Sigla </label>
                          <input type="text" name="sigla" id="duration" class="form-control" placeholder="Duracao do Curso" required>
                        </div>
                        <label for="duration">Descrisao </label>
                        <div class="form-group">
                         <textarea name="descricao"  class="form-control">
                         </textarea>
                         
                        </div>
                      
                      
                      
                      
                     
                        <button type="submit" name="Enviar" class="btn btn-success">Cadastrar</button>
                    </form>
                    
                
                </div>







       


         

 @endsection