@extends('layouts.layout')
@section('title','Encuentros edit')
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/litera/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
@endsection
@section('content')
<br>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="m-auto text-center">
				<h2>{{ $dato->nombrel }}</h2>
				<img src="{{ $dato->imgl }}" alt="">
			</div>
		</div>
		<div class="col-md-4">
			<div class="m-auto text-center">
				<h2>VS</h2>
			</div>
		</div>
		<div class="col-md-4">
			<div class="m-auto text-center">
				<h2>{{ $dato->nombrev }}</h2>
				<img src="{{ $dato->imgv }}" alt="">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<form action="{{ url('encuentros/'.$dato->id) }}" method="POST" style="width: 250px;" class="m-auto">
				@csrf
				@method('PUT')
  				<div class="form-group">
    					<label for="golesl">Goles de {{ $dato->nombrel }}</label>
    					<input type="number" class="form-control" id="golesl" name="golesl" value="{{ $dato->golesl }}">
  				</div>
				<div class="form-group">
    					<label for="golesv">Goles de {{ $dato->nombrev }}</label>
    					<input type="number" class="form-control" id="golesv" name="golesv" value="{{ $dato->golesv }}">
  				</div>
				<div class="form-group">
    					<label for="fecha">Fecha del encuentro</label>
    					<input type="text" class="form-control" id="fecha"  name="fecha" value="{{ $dato->fecha }}">
  				</div>
				 <div class="form-group">
    					<label for="rematesl">Remates de {{ $dato->nombrel }}</label>
    					<input type="number" class="form-control" id="rematesl"  name="rematesl" value="{{ $dato->rematesl }}">
  				</div>
				 <div class="form-group">
    					<label for="rematesv">Remates de {{ $dato->nombrev }}</label>
    					<input type="number" class="form-control" id="rematesv"  name="rematesv" value="{{ $dato->rematesv }}">
  				</div>
				  <div class="form-group">
    					<label for="rematesarcol">Remates al arco de {{ $dato->nombrel }}</label>
    					<input type="number" class="form-control" id="rematesarcol" name="rematesarcol" value="{{ $dato->rematesarcol }}">
  				</div>
				  <div class="form-group">
    					<label for="rematesarcov">Remates al arco de {{ $dato->nombrev }}</label>
    					<input type="number" class="form-control" id="rematesarcov" name="rematesarcov" value="{{ $dato->rematesarcov }}">
  				</div>
				  <div class="form-group">
    					<label for="posesionl">Posesión de {{ $dato->nombrel }}</label>
    					<input type="text" class="form-control" id="posesionl" name="posesionl" value="{{ $dato->posesionl }}">
  				</div>
				  <div class="form-group">
    					<label for="posesionv">Posesión de {{ $dato->nombrev }}</label>
    					<input type="text" class="form-control" id="posesionv" name="posesionv" value="{{ $dato->posesionv }}">
  				</div>
				  <div class="form-group">
    					<label for="pasesl">Pases de {{ $dato->nombrel }}</label>
    					<input type="number" class="form-control" id="pasesl" name="pasesl" value="{{ $dato->pasesl }}">
  				</div>
				  <div class="form-group">
    					<label for="pasesv">Pases de {{ $dato->nombrev }}</label>
    					<input type="number" class="form-control" id="pasesv" name="pasesv" value="{{ $dato->pasesv}}">
  				</div>
				  <div class="form-group">
    					<label for="precisionpasesl">Precisión de pases de {{ $dato->nombrel }}</label>
    					<input type="text" class="form-control" id="precisionpasesl" name="precisionpasesl" value="{{ $dato->precisionpasesl }}">
  				</div>
				  <div class="form-group">
    					<label for="pasesprecisionv">Precisión de pases de {{ $dato->nombrev }}</label>
    					<input type="text" class="form-control" id="precisionpasesv" name="precisionpasesv" value="{{ $dato->precisionpasesv }}">
  				</div>
				  <div class="form-group">
    					<label for="faltasl">Faltas de {{ $dato->nombrel }}</label>
    					<input type="number" class="form-control" id="faltasl" name="faltasl" value="{{ $dato->faltasl }}">
  				</div>
				  <div class="form-group">
    					<label for="faltasv">Faltas de {{ $dato->nombrev }}</label>
    					<input type="number" class="form-control" id="faltasv" name="faltasv" value="{{ $dato->faltasv }}">
  				</div>
				  <div class="form-group">
    					<label for="amarillasl">Tarjetas amarillas de {{ $dato->nombrel }}</label>
    					<input type="number" class="form-control" id="amarillasl" name="amarillasl" value="{{ $dato->amarillasl }}">
  				</div>
				  <div class="form-group">
    					<label for="amarillasv">Tarjetas amarillas de {{ $dato->nombrev }}</label>
    					<input type="number" class="form-control" id="amarillasv" name="amarillasv" value="{{ $dato->amarillasv}}">
  				</div>
				  <div class="form-group">
    					<label for="rojasl">Tarjetas rojas de {{ $dato->nombrel }}</label>
    					<input type="number" class="form-control" id="rojasl" name="rojasl" value="{{ $dato->rojasl }}">
  				</div>
				  <div class="form-group">
    					<label for="rojasv">Tarjetas rojas de {{ $dato->nombrev }}</label>
    					<input type="number" class="form-control" id="rojasv" name="rojasv" value="{{ $dato->rojasv }}">
  				</div>
				  <div class="form-group">
    					<label for="padelantadal">P. adelantada de {{ $dato->nombrel }}</label>
    					<input type="number" class="form-control" id="padelantadal" name="padelantadal" value="{{ $dato->padelantadal }}">
  				</div>
				  <div class="form-group">
    					<label for="padelantadav">P. adelantada de {{ $dato->nombrev }}</label>
    					<input type="number" class="form-control" id="padelantadav" name="padelantadav" value="{{ $dato->padelantadav }}">
  				</div>
				  <div class="form-group">
    					<label for="esquinal">T. de esquina de {{ $dato->nombrel }}</label>
    					<input type="number" class="form-control" id="esquinal" name="esquinal" value="{{ $dato->esquinal }}">
  				</div>
				  <div class="form-group">
    					<label for="esquinav">T. de esquina de {{ $dato->nombrev }}</label>
    					<input type="number" class="form-control" id="esquinav" name="esquinav" value="{{ $dato->esquinav }}">
  				</div>
  				<button type="submit" class="btn btn-primary">Submit</button>
				  <a href="{{ url('encuentros') }}" class="btn btn-danger">Cancelar</a>
			</form>
		</div>
	</div>
	
  	
</div>

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
@endsection
@endsection