@extends('layout')

@section('contenido')

<h1>Contactos</h1>

<h2>Escríbeme</h2>

<form  method="POST" action="contacto">
	<label for="nombre">
		Nombre
		<input type="text" name="nombre">
		{{ $errors->first('nombre') }}
	</label><br/>

	<label for="email">
		Email
		<input type="text" name="email">
		{{ $errors->first('email') }}
	</label><br/>

	<label for="mensaje">
		<textarea name="mensaje" id="" cols="30" rows="10"></textarea>
		{{ $errors->first('mensaje') }}
	</label><br/>
	<input type="submit" value="Enviar">
</form>

@stop