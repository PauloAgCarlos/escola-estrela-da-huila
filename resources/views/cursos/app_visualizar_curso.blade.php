 @extends('layouts.app2')

@section('content')

                <div class="card">
                <div class="crad-header py-2">
                    <h1 class="card-title">

                    Detalhes do Curso

                    </h1>
                 
                </div>    

                <div class="card-body">
               

                      @csrf
                        
                          <li><ul><p>Nome:{{$curso->nome}}</p></ul></li>
                          <li><ul><p>Sigla:{{$curso->sigla}}</p></ul></li>
                          <li><ul><p>Descriçao:{{$curso->descricao}}</p></ul></li>
       
                        

                          
                       
                  
            
                    
                
                </div>
                </div>
               

         

 @endsection