 @extends('layouts.app2')

@section('content')
 

            <div class="card">
    
                <div class="card-header py-2">
                  
                    <h3 class="card-title">

             Permissões Por Categoria

                    </h3>
                      

                </div>    

                </div class="card-body">

                <form action="/salvar_permissions_roles" method="POST" enctype="multipart/form-data">
                      @csrf
                 <div class="table-responsive bg-white">

                        <table class="table table-striped table-bordered">


                        <thead>
                                <tr>
                                    <th>Nº</th>
                                    <th>Permissões</th>
                                    <th>Categoria</th>
                                    
                                </tr>

                        </thead>

                        <tbody>

                        <td>1</td>
                        <td>
                        <select class="form-control" name="permission_id">
                        @foreach($permissions as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                       </select>
                        </td>
                        <td>
                       <select class="form-control" name="role_id">
                        @foreach($roles as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                       </select>
                          


                          </div>
                        </td>
                                
                        </tbody>

                        


                    </table>
                       <div>

                        <button type="submit" name="Enviar" class="btn btn-primary">Salvar</button>

                        </form>
                </div>
            </div>
       

  @endsection