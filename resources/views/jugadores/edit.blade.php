@extends('layouts.layout')
@section('title','Jugadores edit')
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
  	<form action="{{ url('jugadores/'.$dato->id) }}" method="POST" style="width: 200px;" class="m-auto">
		@csrf
		@method('PUT')
  		<div class="form-group">
    			<input type="text" class="form-control" id="jugador1" name="jugador1" value="{{ $dato->jugador1 }}">
  		</div>
		  <div class="form-group">
    			<input type="text" class="form-control" id="jugador2" name="jugador2" value="{{ $dato->jugador2 }}">
  		</div>
		  <div class="form-group">
    			<input type="text" class="form-control" id="jugador3" name="jugador3" value="{{ $dato->jugador3 }}">
  		</div>
		  <div class="form-group">
    			<input type="text" class="form-control" id="jugador4" name="jugador4" value="{{ $dato->jugador4 }}">
  		</div>
		  <div class="form-group">
    			<input type="text" class="form-control" id="jugador5" name="jugador5" value="{{ $dato->jugador5 }}">
  		</div>
		  <div class="form-group">
    			<input type="text" class="form-control" id="jugador6" name="jugador6" value="{{ $dato->jugador6 }}">
  		</div>
		  <div class="form-group">
    			<input type="text" class="form-control" id="jugador7" name="jugador7" value="{{ $dato->jugador7 }}">
  		</div>
		  <div class="form-group">
    			<input type="text" class="form-control" id="jugador8" name="jugador8" value="{{ $dato->jugador8 }}">
  		</div>
		  <div class="form-group">
    			<input type="text" class="form-control" id="jugador9" name="jugador9" value="{{ $dato->jugador9 }}">
  		</div>
		  <div class="form-group">
    			<input type="text" class="form-control" id="jugador10" name="jugador10" value="{{ $dato->jugador10 }}">
		</div>
		  <div class="form-group">
    			<input type="text" class="form-control" id="jugador11" name="jugador11" value="{{ $dato->jugador11 }}">
  		</div>
  		<button type="submit" class="btn btn-primary">Submit</button>
		  <a href="{{ url('jugadores/'.$dato->id) }}" class="btn btn-danger">Cancelar</a>
	</form>
</div>

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
@endsection
@endsection