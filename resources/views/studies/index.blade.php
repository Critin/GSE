@extends('layouts.app')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Estudiantes</h3></div>
          <div class="pull-right">
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Grado</th>
               <th>Estudiante que lo cursa</th>
             </thead>
             <tbody>
              @if($studies->count())  
              @foreach($studies as $study)  
              <tr>
                <td>{{$study->id_grade}}</td>
                <td>{{$study->id_student}}</td>
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
      {{ $studies->links() }}
    </div>
  </div>
</section>
 
@endsection