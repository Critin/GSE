@extends('layout')

@section('content')
    <h1 class="page-header">Listado de solicitudes</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
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
                <td class="text-right">{{ $petitions->n_students }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <p>
        <a href="{{ route('products.pdf') }}" class="btn btn-sm btn-primary">
            Descargar solicitudes en PDF
        </a>
    </p>
@endsection