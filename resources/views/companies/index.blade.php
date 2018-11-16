@extends('layouts.app')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Compañías</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('companies.create') }}" class="btn btn-info" >Añadir Compañía</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Ciudad</th>
               <th>Código Postal</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($companies->count())  
              @foreach($companies as $company)  
              <tr>
                <td>{{$company->name}}</td>
                <td>{{$company->city}}</td>
                <td>{{$company->pc}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('CompaniesController@edit', $company->id)}}" >Editar</a></td>
                <td>
                </form>
                  <form action="{{action('CompaniesController@destroy', $company->id)}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="delete"/>
                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal">
                        Eliminar
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                      
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Advertencia</h4>
                          </div>
                          <div class="modal-body">
                            <p>¿Está seguro que quieres eliminar la empresa {{$company->name}}?<br><br>Esta opción no se puede deshacer.</p>
                          </div>
                          <div class="modal-footer">
                            <form action="{{action('CompaniesController@destroy', $company->id)}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
        
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </form>
                </td>
               </tr>
               @endforeach
               @else
               <tr>
              <td colspan="8">¡¡ No hay registro !!</td>
              </tr>
              @endif
            </tbody>
 
          </table>
        </div>
      </div>
      {{ $companies->links() }}
    </div>
  </div>
</section>
 
@endsection