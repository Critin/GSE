@extends('layouts.app')
@section('content')
<section class="content">
<div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
        <div class="pull-left">
            <h3>Listados</h3>
        </div>
        <div class="pull-right">
            <select name="Filtro" id="inputFiltro_id" class="form-control">
                <option value="">Fecha</option>
                <option value="">Ciclo</option>
                <option value="">Tipo</option>
            </select>
        </div>
        <div>
    <table id="mytable" class="table table-bordred table-striped">
        <thead>
            <tr class="table-container">
                <th>ID</th>
                <th>ID Compañía</th>
                <th>ID Grado</th>
                <th>Tipo</th>
                <th>Nº Estudiantes</th>
            </tr>                            
        </thead>
        <tbody>
            @foreach($petitions as $petitions)
            <tr>
                <td>{{ $petitions->id }}</td>
                <td>{{ $petitions->id_company }}</td>
                <td>{{ $petitions->id_grade }}</td>
                <td>{{ $petitions->type  }}</td>
                <td>{{ $petitions->n_students }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <hr>
    <p>
        <a href="{{ route('listado.pdf') }}" class="btn btn-sm btn-primary">
            Descargar solicitudes en PDF
        </a>
    </p>
</section>
@endsection