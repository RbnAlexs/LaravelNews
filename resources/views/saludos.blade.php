@extends('layout')

@section('contenido')

		<h1>SALUD0S VISTA PARA D MAMON {{$nombre}}</h1>
		{!!$html!!}

		<ul>
			<!--@foreach($consolas as $consola)
				<li>{{$consola}}</li>
			@endforeach-->
			@forelse($consolas as $consola)
				<li>{{$consola}}</li>
			@empty
				<p>No hay consola</p>
			@endforelse

			@if(count($consolas) === 1)
				<p>Solo tienes una consola</p>
			@elseif(count($consolas) > 1)
				<p>Tienes varias consolas</p>
			@else
				<p>No tienes ninguna consola</p>
			@endif
		</ul>
@stop

	