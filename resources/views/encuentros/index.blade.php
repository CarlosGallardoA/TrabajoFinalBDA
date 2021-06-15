@extends('layouts.layout')
@section('title','Partidos')
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/litera/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')
<br>
<div class="container">
  <a href="{{ url('encuentros/create') }}" class="btn btn-warning"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
  <table class="table table-striped table-bordered shadow-lg mt-4" id="futbol">
  <thead class="table table-success">
    <tr>
      <th scope="col">#</th>
      <th scope="col" class="text-center">Bandera</th>
      <th scope="col" class="text-center">Pais</th>
      <th scope="col" class="text-center">Resultado</th>
      <th scope="col" class="text-center">Pais</th>
      <th scope="col" class="text-center">Bandera</th>
      <th scope="col" class="text-center">Fecha</th>
      <th scope="col" class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($datos as $dato) 
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td class="text-center"><img src="{{ $dato->imgl }}" alt="" width="50" height="40"></td>
            <td class="text-center">{{ $dato->nombrel }}</td>
            <td class="text-center">{{ $dato->golesl }} : {{ $dato->golesv }}</td>
            <td class="text-center">{{ $dato->nombrev }}</td>
            <td class="text-center"><img src="{{ $dato->imgv }}" alt="" width="50" height="40"></td>
            <td class="text-center">{{ $dato->fecha }}</td>
            <td class="text-center">
                <a href="{{ url('encuentros/'.$dato->id) }}" class="btn btn-primary"><i class="fa fa-info" aria-hidden="true"></i></a>
                <a href="{{ url('encuentros/'.$dato->id.'/edit') }}" class="btn btn-secondary"><i class="fas fa-marker"></i></a>
		            <form action="{{ url('encuentros/'.$dato->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Eliminar ?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </form> 
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