@extends('layouts.layout')
@section('title','Agregar encuentro')
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/litera/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
@endsection
@section('content')
<div class="container">
	<h1 class="text-center">ID de cada pais</h1>
		<div class="row">
			<div class="col">
				<table class="table table-striped table-bordered table-hover">
					<thead class="table table-dark">
						<tr>
							<th class="text-center">ID</th>
							<th class="text-center">Pais</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th class="text-center">1</th>
							<td class="text-center">Argentina</td>
						</tr>
						<tr>
							<th class="text-center">2</th>
							<td class="text-center">Bolivia</td>
						</tr>
						<tr>
							<th class="text-center">3</th>
							<td class="text-center">Brasil</td>
						</tr>
						<tr>
							<th class="text-center">4</th>
							<td class="text-center">Chile</td>
						</tr>
						<tr>
							<th class="text-center">5</th>
							<td class="text-center">Colombia</td>
						</tr>
						<tr>
							<th class="text-center">6</th>
							<td class="text-center">Ecuador</td>
						</tr>
						<tr>
							<th class="text-center">7</th>
							<td class="text-center">Paraguay</td>
						</tr>
						<tr>
							<th class="text-center">8</th>
							<td class="text-center">Peru</td>
						</tr>
						<tr>
							<th class="text-center">9</th>
							<td class="text-center">Uruguay</td>
						</tr>
						<tr>
							<th class="text-center">10</th>
							<td class="text-center">Venezuela</td>
						</tr>
						
					</tbody>
				</table>
			</div>

		</div>

<div class="row">
		<div class="col">
			<form action="{{ url('encuentros') }}" method="POST" style="width: 250px;" class="m-auto">
				@csrf
				<div class="form-group">
    					<label for="idpaisl">ID del pais local</label>
    					<input type="number" class="form-control" id="idpaisl" name="idpaisl" value="">
  				</div>
				  <div class="form-group">
    					<label for="idpaisv">ID del pais visitante</label>
    					<input type="number" class="form-control" id="idpaisv" name="idpaisv" value="">
  				</div>
  				<div class="form-group">
    					<label for="golesl">Goles del local</label>
    					<input type="number" class="form-control" id="golesl" name="golesl" value="">
  				</div>
				<div class="form-group">
    					<label for="golesv">Goles de visitante</label>
    					<input type="number" class="form-control" id="golesv" name="golesv" value="">
  				</div>
				<div class="form-group">
    					<label for="fecha">Fecha del encuentro</label>
    					<input type="text" class="form-control" id="fecha"  name="fecha" value="">
  				</div>
				 <div class="form-group">
    					<label for="rematesl">Remates del local</label>
    					<input type="number" class="form-control" id="rematesl"  name="rematesl" value="">
  				</div>
				 <div class="form-group">
    					<label for="rematesv">Remates del visitante</label>
    					<input type="number" class="form-control" id="rematesv"  name="rematesv" value="">
  				</div>
				  <div class="form-group">
    					<label for="rematesarcol">Remates al arco del local</label>
    					<input type="number" class="form-control" id="rematesarcol" name="rematesarcol" value="">
  				</div>
				  <div class="form-group">
    					<label for="rematesarcov">Remates al arco del visitante</label>
    					<input type="number" class="form-control" id="rematesarcov" name="rematesarcov" value="">
  				</div>
				  <div class="form-group">
    					<label for="posesionl">Posesión del local</label>
    					<input type="text" class="form-control" id="posesionl" name="posesionl" value="">
  				</div>
				  <div class="form-group">
    					<label for="posesionv">Posesión del visitante</label>
    					<input type="text" class="form-control" id="posesionv" name="posesionv" value="">
  				</div>
				  <div class="form-group">
    					<label for="pasesl">Pases del local</label>
    					<input type="number" class="form-control" id="pasesl" name="pasesl" value="">
  				</div>
				  <div class="form-group">
    					<label for="pasesv">Pases del visitante</label>
    					<input type="number" class="form-control" id="pasesv" name="pasesv" value="">
  				</div>
				  <div class="form-group">
    					<label for="precisionpasesl">Precisión de pases del local</label>
    					<input type="text" class="form-control" id="precisionpasesl" name="precisionpasesl" value="">
  				</div>
				  <div class="form-group">
    					<label for="pasesprecisionv">Precisión de pases del visitante</label>
    					<input type="text" class="form-control" id="precisionpasesv" name="precisionpasesv" value="">
  				</div>
				  <div class="form-group">
    					<label for="faltasl">Faltas del local</label>
    					<input type="number" class="form-control" id="faltasl" name="faltasl" value="">
  				</div>
				  <div class="form-group">
    					<label for="faltasv">Faltas del visitante</label>
    					<input type="number" class="form-control" id="faltasv" name="faltasv" value="">
  				</div>
				  <div class="form-group">
    					<label for="amarillasl">Tarjetas amarillas del local</label>
    					<input type="number" class="form-control" id="amarillasl" name="amarillasl" value="">
  				</div>
				  <div class="form-group">
    					<label for="amarillasv">Tarjetas amarillas del visitante</label>
    					<input type="number" class="form-control" id="amarillasv" name="amarillasv" value="">
  				</div>
				  <div class="form-group">
    					<label for="rojasl">Tarjetas rojas del local</label>
    					<input type="number" class="form-control" id="rojasl" name="rojasl" value="">
  				</div>
				  <div class="form-group">
    					<label for="rojasv">Tarjetas rojas del visitante</label>
    					<input type="number" class="form-control" id="rojasv" name="rojasv" value="">
  				</div>
				  <div class="form-group">
    					<label for="padelantadal">P. adelantada del local</label>
    					<input type="number" class="form-control" id="padelantadal" name="padelantadal" value="">
  				</div>
				  <div class="form-group">
    					<label for="padelantadav">P. adelantada del visitante</label>
    					<input type="number" class="form-control" id="padelantadav" name="padelantadav" value="">
  				</div>
				  <div class="form-group">
    					<label for="esquinal">T. de esquina del local</label>
    					<input type="number" class="form-control" id="esquinal" name="esquinal" value="">
  				</div>
				  <div class="form-group">
    					<label for="esquinav">T. de esquina del visitante</label>
    					<input type="number" class="form-control" id="esquinav" name="esquinav" value="">
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