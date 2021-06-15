@extends('layouts.layout')
@section('title','Estadisticas')
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/litera/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
@endsection
@section('content')
<br>
<div class="container">
	<a href="{{ url('encuentros') }}" class="btn btn-info mb-4">Regresar</a>
  <table class="table table-striped table-bordered shadow-lg" id="futbol">
  <thead class="table table-success">
    <tr>
      <th scope="col" class="text-center"><a href="{{ url('jugadores/'.$dato->idl) }}"><img src="{{ $dato->imgl }}" alt=""></a></th>
      <th scope="col" class="text-center"><h1>Estadística del equipo</h1></th>
      <th scope="col" class="text-center"><a href="{{ url('jugadores/'.$dato->idv) }}"><img src="{{ $dato->imgv }}" alt=""></a></th>
    </tr>
  </thead>
  <tbody>
        <tr>
            <td class="text-center">{{ $dato->rematesl }}</td>
            <td class="text-center">{{ 'Remates' }}</td>
            <td class="text-center">{{ $dato->rematesv }}</td>
        </tr>
	<tr>
            <td class="text-center">{{ $dato->rematesarcol }}</td>
            <td class="text-center">{{ 'Remates al arco' }}</td>
            <td class="text-center">{{ $dato->rematesarcov }}</td>
        </tr>
	<tr>
            <td class="text-center">{{ $dato->posesionl }}</td>
            <td class="text-center">{{ 'Posesión' }}</td>
            <td class="text-center">{{ $dato->posesionv }}</td>
        </tr>
	<tr>
            <td class="text-center">{{ $dato->pasesl }}</td>
            <td class="text-center">{{ 'Pases' }}</td>
            <td class="text-center">{{ $dato->pasesv }}</td>
        </tr>
	<tr>
            <td class="text-center">{{ $dato->precisionpasesl }}</td>
            <td class="text-center">{{ 'Precisión de pases' }}</td>
            <td class="text-center">{{ $dato->precisionpasesv }}</td>
        </tr>
	<tr>
            <td class="text-center">{{ $dato->faltasl }}</td>
            <td class="text-center">{{ 'Faltas' }}</td>
            <td class="text-center">{{ $dato->faltasv }}</td>
        </tr>
	<tr>
            <td class="text-center">{{ $dato->amarillasl }}</td>
            <td class="text-center">{{ 'Tarjetas amarillas' }}</td>
            <td class="text-center">{{ $dato->amarillasv }}</td>
        </tr>
	<tr>
            <td class="text-center">{{ $dato->rojasl }}</td>
            <td class="text-center">{{ 'Tarjetas rojas' }}</td>
            <td class="text-center">{{ $dato->rojasv }}</td>
        </tr>
	<tr>
            <td class="text-center">{{ $dato->padelantadal }}</td>
            <td class="text-center">{{ 'Posición adelantada' }}</td>
            <td class="text-center">{{ $dato->padelantadav }}</td>
        </tr>
	<tr>
            <td class="text-center">{{ $dato->esquinal }}</td>
            <td class="text-center">{{ 'Tiros de esquina' }}</td>
            <td class="text-center">{{ $dato->esquinav }}</td>
        </tr>
  </tbody>
</table>
<p>Estadio: {{ $dato->sede }}</p>
</div>




@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
@endsection
@endsection