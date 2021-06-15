@extends('layouts.layout')
@section('title','Puntos edit')
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/litera/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
@endsection
@section('content')
<br>
<div class="container">
	<div class="m-auto text-center">
		<h2>{{ $dato->nombrel }}</h2>
		<img src="{{ $dato->imgl }}" alt="">
	</div>
  	<form action="{{ url('posiciones/'.$dato->id) }}" method="POST" style="width: 200px;" class="m-auto">
		@csrf
		@method('PUT')
  		<div class="form-group">
    			<label for="pj">Partidos Jugados</label>
    			<input type="number" class="form-control" id="pj" name="pj" value="{{ $dato->pj }}">
  		</div>
  		<div class="form-group">
    			<label for="g">Partidos Ganados</label>
    			<input type="number" class="form-control" id="g" name="g" value="{{ $dato->g }}">
  		</div>
		  <div class="form-group">
    			<label for="e">Partidos Empatados</label>
    			<input type="number" class="form-control" id="e" name="e" value="{{ $dato->e }}">
  		</div>
		  <div class="form-group">
    			<label for="p">Partidos Perdidos</label>
    			<input type="number" class="form-control" id="p" name="p" value="{{ $dato->p }}">
  		</div>
		  <div class="form-group">
    			<label for="gf">Goles a Favor</label>
    			<input type="number" class="form-control" id="gf" name="gf" value="{{ $dato->gf }}">
  		</div>
		  <div class="form-group">
    			<label for="gc">Goles en Contra</label>
    			<input type="number" class="form-control" id="gc" name="gc" value="{{ $dato->gc }}">
  		</div>
		  <div class="form-group">
    			<label for="puntos">Puntos</label>
    			<input type="number" class="form-control" id="puntos" name="puntos" value="{{ $dato->puntos }}">
  		</div>
  		<button type="submit" class="btn btn-primary">Submit</button>
		<a href="{{ url('posiciones') }}" class="btn btn-danger">Cancelar</a>
	</form>
</div>

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
@endsection
@endsection