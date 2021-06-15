@extends('layouts.layout')
@section('title','Puntuación')
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/litera/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')
<br>
<div class="container">
  <table class="table table-striped table-bordered shadow-lg" id="futbol">
  <thead class="table table-success">
    <tr>
      <th scope="col" class="text-center">Bandera</th>
      <th scope="col" class="text-center">Pais</th>
      <th scope="col" class="text-center">PJ</th>
      <th scope="col" class="text-center">G</th>
      <th scope="col" class="text-center">E</th>
      <th scope="col" class="text-center">P</th>
      <th scope="col" class="text-center">GF</th>
      <th scope="col" class="text-center">FC</th>
      <th scope="col" class="text-center">Puntos</th>
      <th scope="col" class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($datos as $dato) 
        <tr>
            <td class="text-center"><img src="{{ $dato->imgl }}" alt="" width="50" height="40"></td>
            <td class="text-center">{{ $dato->nombrel }}</td>
            <td class="text-center">{{ $dato->pj}}</td>
            <td class="text-center">{{ $dato->g }}</td>
            <td class="text-center">{{ $dato->e }}</td>
            <td class="text-center">{{ $dato->p }}</td>
            <td class="text-center">{{ $dato->gf }}</td>
            <td class="text-center">{{ $dato->gc }}</td>
            <td class="text-center">{{ $dato->puntos }}</td>
            <td class="text-center">
                <a href="{{ 'posiciones/'.$dato->id.'/edit' }}" class="btn btn-secondary"><i class="fas fa-marker"></i></a> 
            </td>
        </tr>
      @endforeach
  </tbody>
</table>
</div>

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
    $('#futbol').DataTable();
} );
</script>
@endsection
@endsection