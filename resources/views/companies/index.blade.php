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
                <td><a class="btn btn-primary btn-xs" href="{{action('CompaniesController@edit', $company->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                    <form action="{{action('CompaniesController@destroy', $company->id)}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
 
                        <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
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