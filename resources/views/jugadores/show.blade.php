@extends('layouts.layout')
@section('title','Jugadores')
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/litera/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
@endsection()
@section('content')
<br>
<div class="container">
  <table class="table table-striped table-bordered shadow-lg" id="futbol">
  <thead class="table table-success">
    <tr>
      <th scope="col" class="text-center"><h1>#</h1></th>
      <th scope="col" class="text-center"><img src="{{ $dato->imgl }}" alt="" width="70" height="60"></th>
    </tr>
  </thead>
  <tbody>
        <tr>
            <td class="text-center">{{ '1' }}</td>
            <td class="text-center">{{ $dato->jugador1 }}</td>
        </tr>
	<tr>
            <td class="text-center">{{ '2' }}</td>
            <td class="text-center">{{ $dato->jugador2 }}</td>
        </tr>
	<tr>
            <td class="text-center">{{ '3' }}</td>
            <td class="text-center">{{ $dato->jugador3 }}</td>
        </tr>
	<tr>
            <td class="text-center">{{ '4' }}</td>
            <td class="text-center">{{ $dato->jugador4 }}</td>
        </tr>
	<tr>
            <td class="text-center">{{ '5' }}</td>
            <td class="text-center">{{ $dato->jugador5 }}</td>
        </tr>
	<tr>
            <td class="text-center">{{ '6' }}</td>
            <td class="text-center">{{ $dato->jugador6 }}</td>
        </tr>
	<tr>
            <td class="text-center">{{ '7' }}</td>
            <td class="text-center">{{ $dato->jugador7 }}</td>
        </tr>
	<tr>
            <td class="text-center">{{ '8' }}</td>
            <td class="text-center">{{ $dato->jugador8 }}</td>
        </tr>
	<tr>
            <td class="text-center">{{ '9' }}</td>
            <td class="text-center">{{ $dato->jugador9 }}</td>
        </tr>
	<tr>
            <td class="text-center">{{ '10' }}</td>
            <td class="text-center">{{ $dato->jugador10 }}</td>
        </tr>
	<tr>
            <td class="text-center">{{ '11' }}</td>
            <td class="text-center">{{ $dato->jugador11 }}</td>
        </tr>
  </tbody>
</table>
<td><a href="{{ url('jugadores/'.$dato->id.'/edit') }}" class="btn btn-secondary">Editar</a></td>
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